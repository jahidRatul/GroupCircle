
{{--<div id="id01" class="w3-modal">
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


</div>--}}





<!-- Modal -->
<div class="modal fade" id="myModalShadhin" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div style="padding: 3%" class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">What's on your mind</h4>
            </div>
            <div class="">

                <form>
                    <div class="form-group row">
                        <div class="col-xs-12">
                            <textarea class="form-control" style="max-width: 100% ; width: 100%" "comment"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-4">

                            <select  class="form-control" id="sel1">
                                <option value="Public">Public </option>
                                <option value="Friend">Friend</option>
                                <option value="OnlyMe">Only me</option>
                            </select>




                        </div>
                        <div class="col-xs-4">

                            <select required id="mySelect" name="option" class="form-control" id="option">
                                <option value="" disabled selected>Post Type</option>
                                <option value="">About me</option>
                                <option value="">Game</option>
                                <option value="">Movie</option>
                                <option value="">Song</option>
                            </select>

                        </div>
                        <div class="col-xs-4">

                            <div class="input-group">
                                <input id="CatValue" type="text" value="Add new type" class="form-control" placeholder="Add new type" name="search">
                                <div class="input-group-btn">
                                   {{-- <button onclick="myFunctionCategory()" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                   --}} <a type="button" class="btn btn-default" onclick="myFunctionCategory()"><i class="fa fa-arrow-left"></i>
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-8">
                            <label style="cursor: pointer;" for="upload-photo"><i class="fa fa-photo" style="font-size:20px; color:green"> Add Photo/Video</i></label>
                            <input style="opacity: 0;position: absolute;z-index: -1;" type="file" name="photo" id="upload-photo" />
                        </div>
                    </div><div class="form-group row">
                        <div class="col-xs-4">
                            <label><input type="checkbox" name="remember"><b style="color: #ff7122"> Keep Anonymous</b></label>

                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-4">

                            <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-check-square-o"></i> Publish </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
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