<html>
<head>
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<h2> Client example </h2>
  <h3>Output: </h3>
  <div id="output">this element will be accessed by jquery and this text replaced</div>
<script type="text/javascript">
$(function getCSS(){
            $.ajax({
                url: 'test.php',
                data: "",
                dataType: 'json',
                success: function(data) {
                	var id = data[0];
                	var stylename = data[1];
                	var stylecss = data[2];

                	$('#output').html("<b>id: </b>"+id+"<b> stylename: </b>"+stylename+"<b> stylecss: </b>"+stylecss);
          }
        });
    });
</script>
</body>
</html>