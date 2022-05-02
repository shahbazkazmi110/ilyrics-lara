import * as dzsapHelpers from "../../jsinc/_dzsap_helpers";

window.dzsap_ytapiloaded = false;


function loadScriptIfItDoesNotExist(scriptSrc, checkForVar) {
  return new Promise((resolve, reject) => {

    if (checkForVar) {
      resolve('loadfromvar');
    }
    var script = document.createElement('script');
    script.onload = function () {
      resolve('loadfromload');
    };
    script.onerror = function () {
      reject();
    };
    script.src = scriptSrc;

    document.head.appendChild(script);
  })
}

function dzsap_youtube_functions_init(selfClass) {
  window.dzsap_youtube_functions_inited = true;
  window.dzsap_youtube_functions_loaded = true;


  loadScriptIfItDoesNotExist("https://www.youtube.com/iframe_api", window.dzsap_ytapiloaded).then(function (resolve) {
    yt_setupMedia();
  });


  function yt_setupMedia() {

    if (String(selfClass.cthis.attr('data-source')).indexOf('youtube.com/watch')) {
      var dataSrc = selfClass.cthis.attr('data-source');
      var auxa = String(dataSrc).split('youtube.com/watch?v=');

      if (auxa[1]) {
        dataSrc = auxa[1];
        if (auxa[1].indexOf('&') > -1) {
          var auxb = String(auxa[1]).split('&');
          dataSrc = auxb[0];
        }

        selfClass.data_source = dataSrc;
        selfClass.cthis.attr('data-source', dataSrc);
      }


      selfClass.setup_media();
    }
  }
}

function dzsap_youtube_setupMedia(selfClass, setupMediaAttrs){
  var o = selfClass.initOptions;

  if (o.settings_exclude_from_list !== 'on' && dzsap_list && dzsap_list.indexOf(selfClass.cthis) === -1) {
    if (dzsap_list) {

      if (selfClass.cthis.attr('data-do-not-include-in-list') !== 'on') {
        dzsap_list.push(selfClass.cthis);
      }
    }
  }



  if (setupMediaAttrs.called_from === 'change_media') {
    selfClass.youtube_isInited = false;
    if (selfClass.$mediaNode_ && selfClass.$mediaNode_.destroy) {

      selfClass.$mediaNode_.destroy();
      console.log("DESTROYED LAST PLAYERS");
    }
    selfClass.$theMedia.children().remove();
  }


  selfClass.$theMedia.append('<div id="' + selfClass.youtube_currentId + '"></div>');

  if (window.YT) {
    dzsap_youtube_checkReady(selfClass, selfClass.youtube_currentId);
  }


  selfClass.cthis.addClass('media-setuped');
  dzsapHelpers.player_view_addMetaLoaded(selfClass);

}

function dzsap_youtube_checkReady(selfClass, ytId, retryCount) {




  if (selfClass.isPlayerLoaded === true) {
    return;
  }



  if(!retryCount){
    retryCount = 0;
  }
  if (!ytId) {
    ytId = selfClass.youtube_currentId;
  }

  if(window.YT && window.YT.Player){

    if (selfClass.$theMedia.children().length === 0) {
      selfClass.$theMedia.append('<div id="' + ytId + '"></div>');
    }

    selfClass.$mediaNode_ = new YT.Player(ytId + '', {
      height: '200',
      width: '200',
      videoId: selfClass.data_source,
      playerVars: {
        origin: '',
        controls: 1,
        'showinfo': 0,
        'playsinline': 1,
        rel: 0,
        autohide: 0,
        wmode: 'transparent',
        iv_load_policy: '3'
      },
      events: {
        'onReady': dzsap_youtube_handleReady(selfClass),
        'onStateChange': dzsap_youtube_handleChangeState(selfClass)
      }
    });
    selfClass.cthis.addClass('yt-inited');

    window.youtube_isInited = true;
    selfClass.youtube_isInited = true;
  }else{
    if(retryCount<6){
      dzsap_youtube_checkReady(selfClass,ytId,++retryCount);
    }
  }



  return false;

}

function dzsap_youtube_handleReady(selfClass) {
  return function (arg) {






    if(arg.target && arg.target.playVideo){

      selfClass.$mediaNode_ = arg.target;
    }

    if (window.youtube_isInited === false) {
      dzsap_youtube_checkReady(selfClass, selfClass.youtube_currentId);
      setTimeout(function () {
        dzsap_youtube_handleReady(selfClass)(arg);
      }, 1000);
    } else {
      if (selfClass.$mediaNode_) {

        selfClass.init_loaded({
          'call_from': 'check_yt_ready_phase_two'
        });

        if (selfClass.youtube_retryPlayTimeout) {

          setTimeout(function () {
            selfClass.play_media({
              'called_from': 'check_yt_ready_phase_two'
            });
          }, 500);
        }
      } else {
        setTimeout(function () {
          dzsap_youtube_handleReady(selfClass)(arg)
        }, 1000);
      }

    }
  }
}


function dzsap_youtube_handleChangeState(selfClass) {
  return function (arg) {


    if (arg.data === 4) {

    }
    if (arg.data === 2) {
      selfClass.pause_media({
        'call_from': 'youtube paused'
      });
    }

    if (arg.data === 1) {
      selfClass.play_media({
        'called_from': 'youtube playing'
      });
      selfClass.cthis.addClass('dzsap-loaded');
    }

    if (arg.data === -1) {



      if (selfClass.player_playing) {
        selfClass.seek_to(0);
      }
    }
  }
}

function dzsap_youtube_playMedia(selfClass, margs, yt_curr_id) {


  try {
    if (selfClass.$mediaNode_ && selfClass.$mediaNode_.playVideo) {

      selfClass.$mediaNode_.playVideo();

    } else {


      if (margs.retry_call < 5) {

        margs.retry_call++;
        margs.call_from = 'retry for youtube';


        if (selfClass.youtube_isInited === false) {

          selfClass.isPlayerLoaded = false;

          dzsap_youtube_checkReady(selfClass, yt_curr_id);



          selfClass.youtube_retryPlayTimeout = setTimeout(function (args) {
            selfClass.play_media(args);
          }, 500, margs);
        } else {

          selfClass.youtube_retryPlayTimeout = setTimeout(function (args) {
            selfClass.play_media(args);
          }, 500, margs);
        }
      }
    }
  } catch (err) {
    console.log(err);
  }
}

