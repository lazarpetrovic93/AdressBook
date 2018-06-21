$(document).ready(function(){
  //Show loader image
  $('#loaderIMG').show();
  //Show contact on page load
  showContacts();
  //Add Contact
  $(document).on('submit', '#addContact', function(){
    //Show Loader Image
    $('#loaderIMG').show();

    //Post data from form
    $.post('add_contact.php', $(this).serialize())
      .done(function(data){
        $('#addModal').foundation('reveal','close');
        showContacts();
      });
      return false
  });
  // Edit Contact
  $(document).on('submit', '#editContact', function(){
    //Show Loader Image
    $('#loaderIMG').show();

    //Post data from form
    $.post('edit_contact.php', $(this).serialize())
      .done(function(data){
        $('.editModal').foundation('reveal','close');
        showContacts();
      });
      return false
  });
    // Delete Contact
    $(document).on('submit', '#deleteContact', function(){
      //Show Loader Image
      $('#loaderIMG').show();
  
      //Post data from form
      $.post('delete_contact.php', $(this).serialize())
        .done(function(data){
          showContacts();
        });
        return false
    });
});
//Show contacts
function showContacts() {
  console.log('showing contacts....');
  setTimeout("$('#pageContent').load('contacts.php', function(){$('#loaderIMG').hide();})", 1000);
}

