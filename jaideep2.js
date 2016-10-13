$(document).ready(function(e) {
	var r=$("#row").val();
	var c=$("#col").val();
	$("#addRow").click(function(){
		$("table").append('<tr id="r'+(r)+'"></tr>');
		for(var j=0;j<c;j++){
			
			$("#r"+r).append('<td><input type="text" name="n_'+r+'__'+j+'_"></td>');
		}
		$("#row").val(++r);
	});
	$("#addCol").click(function(){
		c++;
		var newHead=$("#newCol").val();
		$("#heading").append('<th>'+newHead+'</th>');
		for(var j=0;j<r;j++){
			$("#r"+j).append('<td><input type="text" name="n_'+j+'__'+(c-1)+'_"></td>');
		}
		$("#col").val(c);
		$("#foo").append('<input type="hidden" name="head[]" value="'+newHead+'">');
	});
});