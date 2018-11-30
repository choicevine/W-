ElementsByClassName('generatecode').addEventListener('click', loadQr);

function loadQr(){

}

function loadGoogleAPI(){
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'composer.json', true);
  xhr.onload = function(){
    const googleapi = this.response;
  }
  
  xhr.send();
  var_dump(googleapi);
}

function generateCode() {
  
  /**Replace this function block with logic for retrieving the generated code from the server */
  //let generateCode = document.querySelector('.generated-code')
  var secret = "KBSWN3DPEHPK2PXZ";
  var totp = new TOTP();
  //var generateCode = totp.getOTP('KBSWN3DPEHPK2PXZ');
  let generateCode = document.querySelector('.generated-code');
  generateCode.innerHTML = totp.getOTP('KBSWN3DPEHPK2PXZ');
  return{
    generateCode
  }
}

function validateCode() {
  /**Replace this function block with logic for validating the token. You should replace the "validated-code-status" with the result of your validation */
  let validatedCodeStatus = document.querySelector(".validated-code-status");
  let status = ["The code you supplied is true", "The code you supplied is not correct"];
  validatedCodeStatus.innerHTML = status[Math.round(Math.random())];
}

TOTP = function() {

  var dec2hex = function(s) {
      return (s < 15.5 ? "0" : "") + Math.round(s).toString(16);
  };

  var hex2dec = function(s) {
      return parseInt(s, 16);
  };

  var leftpad = function(s, l, p) {
      if(l + 1 >= s.length) {
          s = Array(l + 1 - s.length).join(p) + s;
      }
      return s;
  };

  var base32tohex = function(base32) {
      var base32chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ234567";
      var bits = "";
      var hex = "";
      for(var i = 0; i < base32.length; i++) {
          var val = base32chars.indexOf(base32.charAt(i).toUpperCase());
          bits += leftpad(val.toString(2), 5, '0');
      }
      for(var i = 0; i + 4 <= bits.length; i+=4) {
          var chunk = bits.substr(i, 4);
          hex = hex + parseInt(chunk, 2).toString(16) ;
      }
      return hex;
  };

  this.getOTP = function(secret) {
      try {
          var epoch = Math.round(new Date().getTime() / 1000.0);
          var time = leftpad(dec2hex(Math.floor(epoch / 30)), 16, "0");
          var hmacObj = new jsSHA(time, "HEX");
          var hmac = hmacObj.getHMAC(base32tohex(secret), "HEX", "SHA-1", "HEX");
          var offset = hex2dec(hmac.substring(hmac.length - 1));
          var otp = (hex2dec(hmac.substr(offset * 2, 8)) & hex2dec("7fffffff")) + "";
          otp = (otp).substr(otp.length - 6, 6);
      } catch (error) {
          throw error;
      }
      return otp;
  };

}


