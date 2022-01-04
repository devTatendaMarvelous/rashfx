@extends('layouts.app')
@section('content')
    
                    <!-- Social Campain area end -->
                    <!-- Statistics area start -->
                    <div class="col-lg-8 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4><span class="fa fa-edit"> Edit Profile</span></h4>
                                 <h4> </h4>
                                <div >
                                
                                <form action="/account/dashboard/profile/index.php" method="post">
                                
                                <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Full Name</label>
                                            <input class="form-control" type="text" value="{{$user->name}}" id="example-text-input" readonly>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label">Date of Birth</label>
                                            <input name="dob" class="form-control" type="date" value="" id="example-datetime-local-input" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-tel-input" class="col-form-label">Telephone</label>
                                            <input  name="phone" class="form-control" type="tel" value="----" id="example-tel-input" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="example-search-input" class="col-form-label">Email Address</label>
                                            <input class="form-control"  readonly type="email" value="{{$user->email}}" id="example-search-input">
                                        </div>
                                        
                                      
                                           </div> 
                                            
                                        
                                         <div class="form-group">
                                           
                                            <button type="submit" name="save" class="btn btn-primary mb-3">Save</button>
                                        </div>
                                
                                </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Statistics area end -->
@endsection