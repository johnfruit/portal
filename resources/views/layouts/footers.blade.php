
<script type="text/javascript" src="{{ asset('js/excanvas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.ui.custom.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot.resize.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery.peity.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/fullcalendar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/matrix.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/matrix.dashboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.gritter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/matrix.interface.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/matrix.chat.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.validate.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/matrix.form_validation.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/jquery.wizard.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.uniform.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/select2.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('js/matrix.popover.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/matrix.tables.js') }}"></script>


<!-- newly added for form action js -->
<script type="text/javascript" src="{{ asset('js/bootstrap-colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.toggle.buttons.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/masked.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-wysihtml5.js') }}"></script>



<script type="text/javascript">
  $('.textarea_editor').wysihtml5();
</script>


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

