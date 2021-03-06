<script>
   
   
   $("#insert").validate({
    rules: {
    nameofmachine: {
        required: true
    },
    latitude: {
        required: true,
      },
    longitude: { 
            required: true,
      },
    provinceId:{
        required :true,
        
      },
    districtId:{
          required: true
      },
    subdistrictId:{
          required: true
      },
      
    },
    messages: {
    nameofmachine: {
        required: "กรุณากรอกชื่อตู้"
    },
    latitude: {
        required: "กรุณากรอก ละติจูด"
      },
    longitude: { 
            required:"กรุณากรอก ลองติจูด"
      },
    provinceId:{
        required :"กรุณากรอกชื่อ จังหวัด"    
      },
    districtId:{
          required: "กรุณากรอกชื่อ อำเภอ"
      },
    subdistrictId:{
          required: "กรุณากรอกชื่อ ตำบล"
      },
    },
});
    
    $("#insert").submit(function(){
        updateMachine();
    })


    function updateMachine(){
        event.preventDefault();
        var isValid = $("#insert").valid();
        
        if(isValid){
            var data = {
                "nameofmachine": $("#nameofmachine").val(),
                "latitude": $("#latitude").val(),
                "longitude":$("#longitude").val(),
                "provinceId":$("#provinceId").val(),
                "districtId":$("#districtId").val(),
                "subdistrictsId":$("#subdistrictsId").val(),
                // "userId":$("#userId").val()
                "id": localStorage.getItem("userId")
                
            };
            console.log(data);
            $.post("http://localhost:8080/JaiyaSrc/api/machine/update", JSON.stringify(data),
            function (data, textStatus, jqXHR){
                alert(data.message);
            });
            
        }
    }
    

</script>
   
</body>
</html>

