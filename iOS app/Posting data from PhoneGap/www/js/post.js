$(document).bind('deviceready', function(){
    $(function(){
        $('form').submit(function(){
            var landmarkID = $(this).parent().attr('data-landmark-id');
            var postData = $(this).serialize();
            
            $.ajax({
                type: 'POST',
                data: postData+'&lid='+landmarkID,
                //change the url for your project
                url: 'http://your-domain.com/comments/save.php',
                success: function(data){
                    console.log(data);
                    alert('Your comment was successfully added');
                },
                error: function(){
                    console.log(data);
                    alert('There was an error adding your comment');
                }
            });
            
            return false;
        });
    });
});