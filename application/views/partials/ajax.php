    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Data Table -->
    <script src="<?php echo base_url('assets/DataTables/datatables.js') ?>"></script>

    <script>
        $(document).ready(function(){
            $('#list').dataTable({
            "processing" : true,
            "serverSide" : true,
            "lengthMenu" : [[1,3,6,-1],[1,3,6,"All"]],
            "ajax" : {
            	url:"<?php echo site_url('Blog/data_server') ?>",
            	type:"POST"
            },	
            "columnsDefs":[
            	{
            		"targets":0,
            		"data":"title",
            	},
            	{
            		"targets":1,
            		"data":"content",
            	},
            	{
            		"targets":2,
            		"data":"date",
            	},
            	{
            		"targets":3,
            		"data":"posted_by",
            	},
            ]

            });
        });
    </script>

</body>
</html>