
<style>

.comment-form-container {
    background: #F0F0F0 !important;
    border: #e0dfdf 1px solid !important;
    padding: 20px !important;
    border-radius: 2px !important;
}

.input-row {
    margin-bottom: 20px !important;
	margin-left:20px;
}

.input-field {
    width: 100% !important;
    border-radius: 2px !important;
    padding: 10px !important;
    border: #e0dfdf 1px solid !important;
}

.btn-submit {
    padding: 10px 20px !important;
    background: #333 !important;
    border: #1d1d1d 1px solid !important  ;
    color: #f0f0f0 !important;
    font-size: 0.9em;
    width: 100px !important;
    border-radius: 2px !important;
    cursor:pointer !important;
}

ul {
    list-style-type: none !important;
}

.comment-row {
    border-bottom: #e0dfdf 1px solid !important;
    margin-bottom: 15px !important;
    padding: 15px !important;
}

.outer-comment {
    background: #F0F0F0 !important;
    padding: 20px !important;
    border: #dedddd 1px solid !important;
}

span.commet-row-label {
    font-style: italic !important;
}

span.posted-by {
    color: #09F !important;
}

.comment-info {
    font-size: 0.8em !important;
}
.comment-text {
    margin: 10px 0px !important;
}
.btn-reply {
    font-size: 0.8em !important;
    text-decoration: underline !important;
    color: #888787 !important;
    cursor:pointer !important;
}
#comment-message {
    margin-left: 5px !important;
    color: #189a18 !important;
    display: none !important;
}
</style>

<script src="jquery-3.2.1.min.js"></script>


<body>
    <h1>Comment using PHP and Ajax</h1>

        <form id="frm-comment" style="margin-left:10px">
            <div class="input-row">
                <input type="hidden" name="comment_id" id="commentId"
                    placeholder="Name" /> <input class="input-field"
                    type="text" name="name" id="name" placeholder="Name" />
            </div>
            <div class="input-row">
                <textarea class="input-field" type="text" name="comment"
                    id="comment" placeholder="Add a Comment">  </textarea>
            </div>
            <div>
                <input type="button" class="btn-submit" id="submitButton"
                    value="Publish" /><div id="comment-message">Comments Added Successfully!</div>
            </div>

        </form>

    <div id="output"></div>
    <script>
            function postReply(commentId) {
                $('#commentId').val(commentId);
                $("#name").focus();
            }

            $("#submitButton").click(function () {
                   $("#comment-message").css('display', 'none');
                var str = $("#frm-comment").serialize();

                $.ajax({
                    url: "comment-add.php",
                    data: str,
                    type: 'post',
                    success: function (response)
                    {
                        var result = eval('(' + response + ')');
                        if (response)
                        {
                            $("#comment-message").css('display', 'inline-block');
                            $("#name").val("");
                            $("#comment").val("");
                            $("#commentId").val("");
                           listComment();
                        } else
                        {
                            alert("Failed to add comments !");
                            return false;
                        }
                    }
                });
            });
            
            $(document).ready(function () {
                   listComment();
            });

            function listComment() {
                $.post("comment-list.php",
                        function (data) {
                               var data = JSON.parse(data);
                            
                            var comments = "";
                            var replies = "";
                            var item = "";
                            var parent = -1;
                            var results = new Array();

                            var list = $("<ul class='outer-comment'>");
                            var item = $("<li>").html(comments);

                            for (var i = 0; (i < data.length); i++)
                            {
                                var commentId = data[i]['comment_id'];
                                parent = data[i]['parent_comment_id'];

                                if (parent == "0")
                                {
                                    comments = "<div class='comment-row'  style='margin-left:20px'>"+
                                    "<div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                                    "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                                    "<div><a class='btn-reply' onClick='postReply(" + commentId + ")'>Reply</a></div>"+
                                    "</div>";

                                    var item = $("<li>").html(comments);
                                    list.append(item);
                                    var reply_list = $('<ul>');
                                    item.append(reply_list);
                                    listReplies(commentId, data, reply_list);
                                }
                            }
                            $("#output").html(list);
                        });
            }

            function listReplies(commentId, data, list) {
                for (var i = 0; (i < data.length); i++)
                {
                    if (commentId == data[i].parent_comment_id)
                    {
                        var comments = "<div class='comment-row'>"+
                        " <div class='comment-info'><span class='commet-row-label'>from</span> <span class='posted-by'>" + data[i]['comment_sender_name'] + " </span> <span class='commet-row-label'>at</span> <span class='posted-at'>" + data[i]['date'] + "</span></div>" + 
                        "<div class='comment-text'>" + data[i]['comment'] + "</div>"+
                        "<div><a class='btn-reply' onClick='postReply(" + data[i]['comment_id'] + ")'>Reply</a></div>"+
                        "</div>";
                        var item = $("<li>").html(comments);
                        var reply_list = $('<ul>');
                        list.append(item);
                        item.append(reply_list);
                        listReplies(data[i].comment_id, data, reply_list);
                    }
                }
            }
        </script>
