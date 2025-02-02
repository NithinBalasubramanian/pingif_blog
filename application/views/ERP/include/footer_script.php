

<!-- Customer Entry -->

<script>
    $(document).on('submit','#customer_data',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                list_data();
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
        $('#customer_entry').modal('hide');
    });

    $(document).on('submit','#department_data',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                list_data();
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
        $('#department_entry').modal('hide');
    });
    $(document).on('submit','#employee_data',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                list_data();
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
        $('#employee_entry').modal('hide')
    });
    $(document).on('submit','#supplier_data',function(e){
        e.preventDefault();
        var formData = new FormData(this);
		var url= $(this).attr('action');
        $.ajax({
            type:'POST',
            url: url,
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                list_data();
            },
            error: function(data){
                console.log("error");
                console.log(data);
            }
        });
        $('#supplier_entry').modal('hide')
    });
    $(document).on('click','.status_change',function(){
        var id=$(this).data('id');
        var table = $(this).data('table');
        var base_url = "<?php echo base_url(); ?>";
        $.ajax({
            url: base_url+'Erp/status',
            type: 'POST',
            data: "table=" + table +"&id="+id,
            success: function(data) {
            }
        });
        $(this).parent().parent().remove();
    });
    $(document).on('click','.delete_permanent',function(){
        var id=$(this).data('id');
        var table = $(this).data('table');
        var base_url = "<?php echo base_url(); ?>";
        if(confirm("Are you sure want to delete this")){
        $.ajax({
            url: base_url+'Erp/delete_perm',
            type: 'POST',
            data: "table=" + table +"&id="+id,
            success: function(data) {
            }
        });
        $(this).parent().parent().remove();
        }
    });
</script>