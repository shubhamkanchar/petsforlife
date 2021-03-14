@include('section/head')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"> 
@include('section/header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
             <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example1" >
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Dog Breed</th>
                            <th>City</th>
                            <th>KCI</th>
                            <th>Owner/seller name</th>
                            <th>Mobile</th> 
                            <th>Puppies count</th>
                            <th>price</th>
                            <th>dob</th>
                            <th>filename</th>
                            <th>Action</th>      
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Sr No.</th>
                            <th>Dog Breed</th>
                            <th>City</th>
                            <th>KCI</th>
                            <th>Owner/seller name</th>
                            <th>Mobile</th> 
                            <th>Puppies count</th>
                            <th>price</th>
                            <th>dob</th>
                            <th>filename</th>
                            <th>Action</th> 
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@include('section/footer')

@include('section/script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer></script>
<script type="text/javascript">
    $(document).ready(function(){
        var table1 = $('.dataTables-example1').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            ajax:{
                url :"{{ route('read_dog_post') }}",
                dataSrc: 'data'
            },
            rowId:'_id',
            columns: [
                { data: null },
                { data: 'pet_breed' },
                { data: 'city' },
                { data: 'kci' },
                { data: 'name' },
                { data: 'mob' },
                { data: 'available_puppies' },
                { data: 'price' },
                { data: 'dob' },
                {"mRender": function(data, type, full) {
                        var html="";

                        JSON.parse(full['filename']).forEach(myFunction);

                        function myFunction(item, index) {

                          html +="<img style='height:50px;width:50px' src='{{ asset('dog_image/') }}/"+item+"'>";
                        }
                        return html;
                    }
                },
                {"mRender": function(data, type, full) {
                        var html="";
                        if(full['approved'] == 0)
                        {
                            html='<li><a class="dropdown-item" href="#" onclick=approve_post("'+full["id"]+'")><i class="fa fa-trash"></i>Approve</a></li>';
                        }
                        else
                        {
                            html='<li><a class="dropdown-item" href="#" onclick=disapprove_post("'+full["id"]+'")><i class="fa fa-trash"></i>Disapprove</a></li>';
                        }
                        return '<div class="btn-group"><button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><i class="fa fa-caret-left"></i>  Action</button><ul class="dropdown-menu"><li><a class="dropdown-item" href="#" class="font-bold" onclick=Delete("'+full["_id"]+'")><i class="fa fa-edit"></i>Delete</a></li>'+html+'</ul></div>';
                    }
                }    
            ],
        });
        table1.on( 'order.dt search.dt', function () {
            table1.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
    });

    function approve_post(id)
    {
        $.ajax({
            url: "{{ route('approve') }}",
            data: {id:id,"_token": "{{ csrf_token() }}"},
            type: "POST",
            dataType: 'json',
            success: function(result){
                if(result.status == 1)
                {
                    toastr.success(result.message);
                    $('.dataTables-example1').DataTable().ajax.reload();
                }else
                {
                    toastr.error(result.message);
                }
            }
        });
    }

     function disapprove_post(id)
    {
        $.ajax({
            url: "{{ route('disapprove') }}",
            data: {id:id,"_token": "{{ csrf_token() }}"},
            type: "POST",
            dataType: 'json', 
            success: function(result){
                if(result.status == 1)
                {
                    toastr.success(result.message);
                    $('.dataTables-example1').DataTable().ajax.reload();
                }else
                {
                    toastr.error(result.message);
                }
            }
        });
    }
</script>
</body>
</html>
