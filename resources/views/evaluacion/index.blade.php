@extends ('layouts.app') @section('main-content')
<link rel="stylesheet" href="{{ URL::asset('css/fresh-bootstrap-table.css') }}" />

<div class="wrapper">
    <div class="container">
        <div class="row">
           <div class="row justify-content: center">
                    <div class="col-lg-6 col-md-6 col-md-offset-2">
                        @include('evaluacion.search')
                    </div>
                </div>
            <div class="col-md-8 col-md-offset-1">
                                
                <div class="fresh-table full-color-orange">
                <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
                        Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
                -->
             
                    <table id="fresh-table" class="table">

                        <thead>
                          <th data-field="id">ID</th>
                          <th data-field="name" data-sortable="true">Nombre Familia</th>
                          <th data-field="salary" data-sortable="true">Madre</th>
                          <th>DNI</th>
                          <th data-field="actions">Info</th>
                        </thead>
                        <tbody>
                          @foreach ($familias as $fa)
                            <tr>
                              <td>{{ $fa->idFamilia}}</td>
                              <td>{{ $fa->Nom_fam}}</td>
                              <td>{{ $fa->Madre_nombre.' '.$fa->Madre_apel_pa.' '.$fa->Madre_apel_ma}}</td>
                              <td>{{ $fa->Madre_DNI}}</td>
                              <td><a href="{{URL::action('FamiliaController@show',$fa->idFamilia)}}">
                                <button class="btn btn-info"><i class="glyphicon glyphicon-th-list"></i> Ver</button></td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                  
                </div>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap-table.js') }}"></script>


<script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;
            
        $().ready(function(){
            $table.bootstrapTable({
                toolbar: ".toolbar",
    
                showRefresh: true,
                search: false,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                pageSize: 5,
                pageList: [2,4,6,50,100],
                
                formatShowingRows: function(pageFrom, pageTo, totalRows){
                    //do nothing here, we don't want to show the text "showing x of y from..." 
                },
                formatRecordsPerPage: function(pageNumber){
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                }
            });
            
                        
            
            $(window).resize(function () {
                $table.bootstrapTable('resetView');
            });
    
            
            window.operateEvents = {
                'click .like': function (e, value, row, index) {
                    alert('You click like icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);
                },
                'click .edit': function (e, value, row, index) {
                    alert('You click edit icon, row: ' + JSON.stringify(row));
                    console.log(value, row, index);    
                },
                'click .remove': function (e, value, row, index) {
                    $table.bootstrapTable('remove', {
                        field: 'id',
                        values: [row.id]
                    });
            
                }
            };
            
            $alertBtn.click(function () {
                alert("You pressed on Alert");
            });
            
        });
            
    
        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Like" class="table-action like" href="javascript:void(0)" title="Like">',
                    '<i class="fa fa-heart"></i>',
                '</a>',
                '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
    
            
    </script>

@endsection