@extends ('layouts.app')

@section('main-content')

 <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                               
   <div class="row justify-content: center">
   <div class="col-lg-10 col-md-2 ">
		<center><h3>Historial Clinico</h3></center>

<div class=" col-md-12"> 

                        <div class="card">
                            <div class="">
                                <h4 class="header4">Paciente Hans</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control border-input" disabled="" placeholder="" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Apellido Paterno</label>
                                                <input type="text" class="form-control border-input" disabled=""  placeholder="Exebio " value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Apellido Materno</label>
                                                <input type="text" class="form-control border-input" disabled="" placeholder="Fernandez">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Fecha Nacimiento</label>
                                                <input type="text" class="form-control border-input" disabled="" placeholder="20/12/1970">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Company" value="Chet">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control border-input" placeholder="Last Name" value="Faker">
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control border-input" placeholder="City" value="Melbourne">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control border-input" placeholder="Country" value="Australia">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control border-input" placeholder="ZIP Code">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>

	      <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class=" header4" >Control Nutricional</h4>
                                <p class="category">Here is a subtitle for this table</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <tr><th>ID</th>
                                      <th>Name</th>
                                      <th>Salary</th>
                                      <th>Country</th>
                                      <th>City</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Dakota Rice</td>
                                          <td>$36,738</td>
                                          <td>Niger</td>
                                          <td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                          <td>2</td>
                                          <td>Minerva Hooper</td>
                                          <td>$23,789</td>
                                          <td>Curaçao</td>
                                          <td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                          <td>3</td>
                                          <td>Sage Rodriguez</td>
                                          <td>$56,142</td>
                                          <td>Netherlands</td>
                                          <td>Baileux</td>
                                        </tr>
                                        <
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                            
                        </div>
                    </div>


	</div>
   </div>
 


                          
                          

                </div>
@endsection