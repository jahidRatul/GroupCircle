<div style="display:none;" id="panel" class="chatbox">
    <div class="chatbox_body">

        <div onclick="w3_close()" class="chatbox_head">
            <i class="fa fa-window-close-o"></i> Chat
        </div>
        <div class="user">
            <?php
            $users = array('Rafi', 'Al Sami', 'Moniruzzaman', 'Shadhin', 'Khandakar', 'Al Sami', 'Moniruzzaman', 'Shadhin', 'Khandakar', 'Al Sami', 'Moniruzzaman', 'Shadhin', 'Khandakar', 'Jahid', 'Ratul', 'Ashraful',
                'Rabbi', 'Parvez', 'Mak', 'Alamgir', 'Hossain', 'Sajid', 'Alam', 'Bony', 'Aninda');
            $num_user = count($users);
            sort($users);
            for ($u = 0; $u < $num_user; $u++) {
                echo "<p>" . $users[$u] . "</p>";
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
            });
        });
    </script>

</div>