
<div id="id01" class="w3-modal">
    <section style="margin-left: 20%;margin-right: 20%" class="w3-card-4 w3-animate-zoom w3-center panel">
        <div class="compose-mail">
            <form class="w3-container" method="post">
                <label><b>Write your post</b></label><br><br>
                <textarea style="margin-left: 3.5%;margin-right: 3.5% ;max-width: 93%;height: 120px "
                          class="w3-input w3-border " placeholder="Share Your idea"></textarea>
                <br>
                <div class="w3-row-padding">
                    <div class="w3-third">
                        <label>Select category</b></label></div>
                    <div class="w3-third">
                        <label>Add new</b></label></div>
                    <div class="w3-third">
                        <label>Insert </b></label></div>
                </div>
                <div class="w3-row-padding">

                    <div class="w3-third">
                        <select id="mySelect" name="option" class="w3-select w3-border">
                            <option value="" disabled selected>Choose your Category</option>
                            <option value="1">About me</option>
                            <option value="2">Movie</option>
                            <option value="3">Games</option>
                        </select>
                    </div>
                    <div class="w3-third">
                        <input id="CatValue" value="Games" style="width: 100%;height:40px;border-radius: 0px"
                               class="w3-input w3-border w3-round-large" type="text">
                    </div>
                    <div class="w3-third">
                        <a type="button" class="w3-block  w3-button w3-white w3-border" onclick="myFunctionCategory()">Insert
                            Category</a>
                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-third">
                        <label>Post Type</b></label>
                    </div>
                    <div class="w3-third">
                        <label>File upload</b></label>
                    </div>
                    <div class="w3-third">

                    </div>
                </div>
                <div class="w3-row-padding">
                    <div class="w3-third">
                        <select class="w3-select w3-border" name="option">
                            <option value="1">Anonymous</option>
                            <option value="2">Not anonymous</option>
                        </select>
                    </div>
                    <div class="w3-third">
                        <input style="height: 40px;width: 100%" class="w3-input w3-border" type="file">
                    </div>
                    <div class="w3-third">

                        <button class="w3-button w3-block w3-green" type="submit">Publish</button>
                    </div>
                </div>

                <div class="w3-row-padding">
                    <div class="w3-third">
                    </div>
                    <div class="w3-third">

                    </div>
                    <div class="w3-third">
                        <button style="width: 100%;margin-top: 3%"
                                onclick="document.getElementById('id01').style.display='none'" type="button"
                                class="w3-button w3-red">Cancel
                        </button>
                    </div>
                </div>


                <br><br>
            </form>
        </div>

    </section>
</div>


<script>
    function myFunctionCategory() {
        var x = document.getElementById("mySelect");
        var option = document.createElement("option");
        option.text = document.getElementById("CatValue").value;
        x.prepend(option);
    }

    $(document).ready(function () {
        $(window).keydown(function (event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
    });
</script>