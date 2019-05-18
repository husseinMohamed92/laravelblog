function openRegister() {
    $('#SelectButton').hide();
    $('#LoginForm').hide();  
    $('#RegisterForm').show();
    
    $('#L-Username').val('');
    $('#L-Email').val('');
    $('#L-Password').val('');
    $('#AcceptRelogin').prop('checked', false);
  }
  
  function openLogin() {
    $('#SelectButton').hide();
    $('#RegisterForm').hide();  
    $('#LoginForm').show();
    
    $('#Username').val('');
    $('#Email').val('');
    $('#Password').val('');
    $('#C-Password').val('');
    $('#AcceptNewsletter').prop('checked', false);
    $('#AcceptPolicy').prop('checked', false);
  }
  
  function backBegin() {
    $('#SelectButton').show();
    $('#RegisterForm').hide();
    $('#LoginForm').hide();
    
    $('#Username').val('');
    $('#Email').val('');
    $('#Password').val('');
    $('#C-Password').val('');
    $('#AcceptNewsletter').prop('checked', false);
    $('#AcceptPolicy').prop('checked', false);
    $('#L-Username').val('');
    $('#L-Email').val('');
    $('#L-Password').val('');
    $('#AcceptRelogin').prop('checked', false);
  }
  