<!-- js placed at the end of the document so the pages load faster -->
<script>
    // For Demo Purpose [Changing input group text on focus]
    $(function() {
        $('input, select').on('focus', function() {
            $(this).parent().find('.input-group-text').css('border-color', '#80bdff');
        });
        $('input, select').on('blur', function() {
            $(this).parent().find('.input-group-text').css('border-color', '#ced4da');
        });
    });
</script>
</body>

</html>