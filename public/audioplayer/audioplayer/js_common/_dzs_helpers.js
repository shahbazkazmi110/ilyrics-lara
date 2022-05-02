exports.decode_json = function (arg) {
  var fout = {};

  if (arg) {

    try {

      fout = JSON.parse(arg);
    } catch (err) {

      return null;
    }
  }

  return fout;
}

exports.loadScriptIfItDoesNotExist = (scriptSrc, checkForVar) => {
  return new Promise((resolve, reject) => {
    if (checkForVar) {
      resolve('loadfromvar');
      return;
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


exports.getBaseUrl = (baseUrlVar, scriptName) => {
  if (window[baseUrlVar]) {
    return window[baseUrlVar];
  }

  let scripts = document.getElementsByTagName("script");
  for (var scriptKey in scripts) {
    if (scripts[scriptKey] && scripts[scriptKey].src && String(scripts[scriptKey].src).indexOf(scriptName) > -1) {
      break;
    }
  }
  var baseUrl_arr = String(scripts[scriptKey].src).split('/');
  baseUrl_arr.splice(-1, 1);
  const result = baseUrl_arr.join('/');
  window[baseUrlVar] = result;
  return result;
}
exports.sanitizeToCssPx = (arg) => {

  if (String(arg).indexOf('%') > -1 || String(arg).indexOf('em') > -1 || String(arg).indexOf('px') > -1 || String(arg).indexOf('auto') > -1) {
    return arg;
  }
  return arg + 'px';
}


exports.setupTooltip = (args) => {

  var mainArgs = Object.assign({
    tooltipInnerHTML: '',
    tooltipIndicatorText: '',
    tooltipConClass: '',
  }, args)

  return `<div class="dzstooltip-con ${mainArgs.tooltipConClass}"><span class="dzstooltip main-tooltip   talign-end arrow-bottom style-rounded color-dark-light  dims-set transition-slidedown " style="width: 280px;"><span class="dzstooltip--inner">${mainArgs.tooltipInnerHTML}</span> </span></span><span class="tooltip-indicator">${mainArgs.tooltipIndicatorText}</span></div>`;
}


exports.isInt = function (n) {
  return typeof n == 'number' && Math.round(n) % 1 == 0;
}

exports.isValid = function (n) {
  return typeof n != 'undefined' && n != '';
}


exports.getRelativeX = function (mouseX, $el_) {
  if (jQuery) {
    return mouseX - jQuery($el_).offset().left;
  }
}
