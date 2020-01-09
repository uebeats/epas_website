  var module_9528034 = (function() {
    var __hs_messages = {};
    i18n_getmessage = function() {
      return hs_i18n_getMessage(__hs_messages, hsVars['language'], arguments); 
    };
    i18n_getlanguage = function() {
      return hsVars['language']; 
    };
$(document).on('ready',function() {
  $('#regionSwitcher,#regionSwitcherMobile').on('change',function() {
  console.log('switch');
    let newloc = this.value;
    window.location.href= newloc;
  });
});
  })();
