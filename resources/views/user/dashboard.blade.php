    @include('components.head')
        @include('components.nav')
            @include('components.main_sidebar')
<style type="text/css">
    ul.radio_btn_image {
  list-style-type: none;
}

li.radio_btn_image {
  display: inline-block;
}

input[type="radio"][id^="cb"] {
  display: none;
}

label.radio_btn_image {
  border: 1px solid #fff;
  padding: 10px;
  display: block;
  position: relative;
  margin: 10px;
  cursor: pointer;
}

label.radio_btn_image:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -5px;
  left: -5px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label.radio_btn_image{
     height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}


img.radio_btn_image {
  height: 100px;
  width: 100px;
  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}

:checked + label.radio_btn_image {
  border-color: #ddd;
}

:checked + label.radio_btn_image:before {
  content: "✓";
  background-color: grey;
  transform: scale(1);
}

:checked + label img {
  transform: scale(0.9);
  box-shadow: 0 0 5px #333;
  z-index: -1;
}
</style>


<div class="modal fade" id="work_space" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Create  New Work Space</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Workspace Name</label>
                                        <input type="text" class="form-control" id="work_space" placeholder="Workspace Name"name="work_space" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="Workspace_description">Briefly Description</label>
                                      <textarea class="form-control" id="Workspace_description" placeholder="Briefly Description" name="Workspace_description"></textarea>
                                    </div>
                                </div>
                                

                                 <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Website URL</label>
                                        <input type="text" class="form-control" id="link" placeholder="Url"name="link" >
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Logo</label>
                                        <input type="file" class="form-control" id="link" placeholder="Email"name="image"accept="image/*" >
                                    </div>

                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger round_border" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary round_border">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="new_board" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Create  New Board</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                           <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="inputEmail4">Board Name</label>
                                        <input type="text" class="form-control" id="work_space" placeholder="Board Name"name="work_space" >
                                    </div>
                                    <div class="form-group col-md-12">
                                        
                                        <label for="inputState">Visibility / Privacy</label>
                                        <select id="inputState" class="form-control">
                                            <option>Private ( Only Board Member Can See and Edit This Board)</option>
                                           <option >Workspace ( Only Members Within The Workspace Can See and Edit This Board)</option>
                                             <option disabled>Public ( Everyone On The Internet  Can See But Only Board Members Can Edit)</option>
                                        </select>
                                    
                                    </div>
                                     <div class="form-group col-md-12">
                                         <label for="inputEmail4">Select Background</label>
                                        <ul class="radio_btn_image">
  <li class="radio_btn_image">
    <input type="radio" name="test" id="cb1"  value="/img/bg/pink.webp" color="pink" />
    <label for="cb1"><img class="radio_btn_image" src="/img/bg/pink.webp" /></label>
  </li>
   <li class="radio_btn_image">
    <input type="radio" name="test" id="cb2"  value="/img/bg/green.webp" color="green" />
    <label for="cb2"><img class="radio_btn_image" src="/img/bg/green.webp" /></label>
  </li>
  <li class="radio_btn_image">
    <input type="radio" name="test" id="cb3"  value="/img/bg/green1.webp" color="green" />
    <label for="cb3"><img class="radio_btn_image" src="/img/bg/green1.webp" /></label>
  </li>
   <li class="radio_btn_image">
    <input type="radio" name="test" id="cb4"  value="/img/bg/green2.webp" color="green" />
    <label for="cb4"><img class="radio_btn_image" src="/img/bg/green2.webp" /></label>
  </li>
   <li class="radio_btn_image">
    <input type="radio" name="test" id="cb5"  value="/img/bg/red.webp" color="red" />
    <label for="cb5"><img class="radio_btn_image" src="/img/bg/red.webp" /></label>
  </li>
  <li class="radio_btn_image">
    <input type="radio" name="test" id="cb6"  value="/img/bg/blue1.webp" color="blue" />
    <label for="cb6"><img class="radio_btn_image" src="/img/bg/blue1.webp" /></label>
  </li>
  <li class="radio_btn_image">
    <input type="radio" name="test" id="cb7"  value="/img/bg/blue2.webp" color="blue" />
    <label for="cb7"><img class="radio_btn_image" src="/img/bg/blue2.webp" /></label>
  </li>
   <li class="radio_btn_image">
    <input type="radio" name="test" id="cb8"  value="/img/bg/blue3.webp" color="blue" />
    <label for="cb8"><img class="radio_btn_image" src="/img/bg/blue3.webp" /></label>
  </li>
  <li class="radio_btn_image">
    <input type="radio" name="test" id="cb9"  value="/img/bg/blue4.webp" color="blue" />
    <label for="cb9"><img class="radio_btn_image" src="/img/bg/blue4.webp" /></label>
  </li>
  
</ul>
                                    
                                    </div>



                                      <div class="form-group col-md-12">
                                        
                                        <label for="inputState">Workspace</label>
                                        <select id="inputState" class="form-control">
                                            <option>Hush42</option>
                                           
                                        </select>
                                    
                                    </div>


                                </div>

                                 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger round_border" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary round_border">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

















          
<main>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1>Dashboard</h1>
                    
                    <div class="separator mb-5"></div>
                </div>
                 <div class="col-12 mb-4">
                    <h5 class="font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /><path d="M12 7v5l3 3" /></svg> Recently Viewed</h5>
                    
                   
                </div>

                <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-primary bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center min-width-zero ">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Live Development</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div> <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-gradient " style="border-radius: 15px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Development Resources</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
                         <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-success bg-gradient " style="border-radius: 15px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Team Resources</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-danger bg-gradient " style="border-radius: 15px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Vision 2024</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>


                         <div class="col-12 mt-4">
                            <div class="row">
                                <div class="col-12 col-md-10">
                                       <h5 class="text-uppercase font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-desk" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 6h18" /><path d="M4 6v13" /><path d="M20 19v-13" /><path d="M4 10h16" /><path d="M15 6v8a2 2 0 0 0 2 2h3" /></svg> Your workspaces</h5>
                                    
                                </div>
                               <div class="col-12 col-md-2">
                                 
                               

                                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle round_border mb-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Create
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(97px, 37px, 0px);">
                                    <button class="dropdown-item " href="#" id="work_space" data-toggle="modal" data-target="#work_space">New Workspace</button>
                                    <button class="dropdown-item " href="#" id="new_board" data-toggle="modal" data-target="#new_board">New Board</button>
                                </div>
                           
                                   
                               </div>
                   
                            </div>
                  
                   <div class="separator mb-5"></div>
                </div>
<!-- start of workspace -->
                <!-- <div class="col-12 mb-4">
                    
                        <div class="row">
                    <div class="col-md-4 col-sm-12 ">
                       <h6 class="text-capitalize font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-sketch" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.262 10.878l8 8.789c.4 .44 1.091 .44 1.491 0l8 -8.79c.313 -.344 .349 -.859 .087 -1.243l-3.537 -5.194a1 1 0 0 0 -.823 -.436h-8.926a1 1 0 0 0 -.823 .436l-3.54 5.192c-.263 .385 -.227 .901 .087 1.246z" /></svg> Hush42 Team workspaces</h6> 
                    </div>
                    <div class=" col-md-8 col-sm-12">
                        <div class="container">
                        <div class="row">
 <div class="col-6 col-md-2 px-0 py-0 pl-1  ">
    <a href="/k_board" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4 "> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 1px;" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l6 0" /><path d="M14 4l6 0" /><path d="M4 8m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 8m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Boards</pp></a>
 </div>
  <div class="col-6 col-md-2 px-0 py-0 pl-1  ">
     <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"  style="margin-right: 1px;" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 12h6v8h-6z" /><path d="M14 4h6v4h-6z" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Views</pp></a>
 </div>
 <div class="col-6 col-md-3  px-0 py-0 pl-1">
   <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24"  style="margin-right: 1px;" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Memebers(4)</pp></a>
 </div>
  <div class="col-6 col-md-2 px-0 py-0 pl-1 px-0  ">
    <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24"  style="margin-right: 1px;" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Settings</pp></a>
 </div>
 
</div>
</div>
</div>

                
                    
                    
                  
                </div>
            </div>


<div class="col-12 mb-4">
    <div class="row">



            <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Create new board</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>


                <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-primary bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center min-width-zero ">
                                        <div class="min-width-zero">
                                            <a href="/k_board">
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Live Development</p>
                                            </a>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div> 

                           
                 
                         <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-success bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Team Resources</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-danger bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Vision 2024</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
</div>
</div>


end of work space  -->
<!-- start of workspace -->


      <!--                     <div class="col-12 mb-4">
                    
                        <div class="row">
                    <div class="col-md-4 col-sm-12 ">
                       <h6 class="text-capitalize font-weight-bold"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-sketch" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3.262 10.878l8 8.789c.4 .44 1.091 .44 1.491 0l8 -8.79c.313 -.344 .349 -.859 .087 -1.243l-3.537 -5.194a1 1 0 0 0 -.823 -.436h-8.926a1 1 0 0 0 -.823 .436l-3.54 5.192c-.263 .385 -.227 .901 .087 1.246z" /></svg> Hush42 Team workspaces</h6> 
                    </div>
                    <div class=" col-md-8 col-sm-12">
                        <div class="container">
                        <div class="row">
 <div class="col-6 col-md-2 px-0 py-0 pl-1  ">
    <a href="/k_board" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4 "> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-kanban" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 1px;" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l6 0" /><path d="M14 4l6 0" /><path d="M4 8m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M14 8m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Boards</pp></a>
 </div>
  <div class="col-6 col-md-2 px-0 py-0 pl-1  ">
     <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-layout-dashboard"  style="margin-right: 1px;" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4h6v8h-6z" /><path d="M4 16h6v4h-6z" /><path d="M14 12h6v8h-6z" /><path d="M14 4h6v4h-6z" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Views</pp></a>
 </div>
 <div class="col-6 col-md-3  px-0 py-0 pl-1">
   <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="24" height="24"  style="margin-right: 1px;" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Memebers(4)</pp></a>
 </div>
  <div class="col-6 col-md-2 px-0 py-0 pl-1 px-0  ">
    <a href="" class="btn btn-secondary   mb-1 w-100  round_border d-flex   px-2 py-2 pl-4"> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="24" height="24"  style="margin-right: 1px;" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" /><path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" /></svg> <pp class="mt-1 fw-bold" style="font-weight: 600;">Settings</pp></a>
 </div>
 
</div>
</div>
</div>

                
                    
                    
                  
                </div>
            </div>




<div class="col-12 mb-4">
    <div class="row">

            <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Create new board</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
</div>


                <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-primary bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center min-width-zero ">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Live Development</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div> 

                           
                 
                         <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-success bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Team Resources</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>

                        <div class="col-md-3 col-sm-3 col-lg-3 col-6 mb-4">
                            <div class="card d-flex flex-row mb-0 " style="cursor: pointer;">
                               
                                <div class=" d-flex flex-grow-1 min-width-zero bg-danger bg-gradient " style="border-radius: 15px;height: 80px;">
                                    <div class="card-body pl-0 align-self-center d-flex  justify-content-center">
                                        <div class="min-width-zero">
                                            
                                                <p class="list-item-heading mb-1 truncate font-weight-bold text-white">Vision 2024</p>
                                            
                                            
                                            

                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                           
                        </div>
</div>
</div> -->
                       <!--  end of workspace -->
                <!-- <div class="col-lg-12 col-xl-6">
                    <div class="icon-cards-row">
                        <div class="glide dashboard-numbers">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-clock"></i>
                                                <p class="card-text mb-0">Pending Orders</p>
                                                <p class="lead text-center">16</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-basket-coins"></i>
                                                <p class="card-text mb-0">Completed Orders</p>
                                                <p class="lead text-center">32</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-arrow-refresh"></i>
                                                <p class="card-text mb-0">Refund Requests</p>
                                                <p class="lead text-center">2</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="glide__slide">
                                        <a href="#" class="card">
                                            <div class="card-body text-center">
                                                <i class="iconsminds-mail-read"></i>
                                                <p class="card-text mb-0">New Comments</p>
                                                <p class="lead text-center">25</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="position-absolute card-top-buttons">

                                    <button class="btn btn-header-light icon-button" type="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="simple-icon-refresh"></i>
                                    </button>

                                    <div class="dropdown-menu dropdown-menu-right mt-3">
                                        <a class="dropdown-item" href="#">Sales</a>
                                        <a class="dropdown-item" href="#">Orders</a>
                                        <a class="dropdown-item" href="#">Refunds</a>
                                    </div>

                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Sales</h5>
                                    <div class="dashboard-line-chart chart">
                                        <canvas id="salesChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Recent Orders</h5>
                            <div class="scroll dashboard-list-with-thumbs">
                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/marble-cake-thumb.jpg" alt="Marble Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <p>
                                            <p class="list-item-heading">Marble Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Latashia Nagy - 100-148 Warwick
                                                    Trfy, Kansas City, USA</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fruitcake-thumb.jpg" alt="Fruitcake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-2 position-absolute badge-top-right">NEW</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fruitcake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Marty Otte - 166-156 Rue de
                                                    Varennes, Gatineau, QC J8T 8G4, Canada</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/chocolate-cake-thumb.jpg" alt="Chocolate Cake"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-1 position-absolute badge-top-right">PROCESS</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Chocolate Cake</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Linn Ronning - Rasen 2-14, 98547
                                                    Kühndorf, Germany</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/fat-rascal-thumb.jpg" alt="Fat Rascal"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Fat Rascal</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Rasheeda Vaquera - 37 Rue des
                                                    Grands Prés, 03100 Montluçon, France</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/streuselkuchen-thumb.jpg" alt="Streuselkuchen"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Streuselkuchen</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Mimi Carreira - 36-71 Victoria
                                                    St, Birmingham, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3">
                                    <a class="d-block position-relative" href="#">
                                        <img src="img/products/cremeschnitte-thumb.jpg" alt="Cremeschnitte"
                                            class="list-thumbnail border-0" />
                                        <span
                                            class="badge badge-pill badge-theme-3 position-absolute badge-top-right">DONE</span>
                                    </a>
                                    <div class="pl-3 pt-2 pr-2 pb-2">
                                        <a href="#">
                                            <p class="list-item-heading">Cremeschnitte</p>
                                            <div class="pr-4 d-none d-sm-block">
                                                <p class="text-muted mb-1 text-small">Lenna Majeed - 6 Hertford St
                                                    Mayfair, London, UK</p>
                                            </div>
                                            <div class="text-primary text-small font-weight-medium d-none d-sm-block">
                                                09.04.2018</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Product Categories</h5>
                            <div class="dashboard-donut-chart chart">
                                <canvas id="polarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Logs</h5>

                            <div class="scroll dashboard-logs">

                                <table class="table table-sm table-borderless">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-1 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New user registiration</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">14:12</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">13:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">14 products added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:55</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Napoleonshat</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:44</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Cremeschnitte</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">12:30</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Soufflé</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-danger align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">2 categories added</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">10:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:28</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:25</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Bebinca</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">09:20</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="log-indicator border-theme-2 align-middle"></span>
                                            </td>
                                            <td>
                                                <span class="font-weight-medium">New sale: Chocolate Cake</span>
                                            </td>
                                            <td class="text-right">
                                                <span class="text-muted">08:20</span>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tickets</h5>

                            <div class="scroll dashboard-list-with-user">
                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-1.jpg" alt="Mayra Sibley"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mayra Sibley</p>
                                            <p class="text-muted mb-0 text-small">09.08.2018 - 12:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-7.jpg" alt="Mimi Carreira"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Mimi Carreira</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 10:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-6.jpg" alt="Philip Nelms"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Philip Nelms</p>
                                            <p class="text-muted mb-0 text-small">05.08.2018 - 09:12</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-3.jpg" alt="Terese Threadgill"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Terese Threadgill</p>
                                            <p class="text-muted mb-0 text-small">01.08.2018 - 18:20</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-5.jpg" alt="Kathryn Mengel"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Kathryn Mengel</p>
                                            <p class="text-muted mb-0 text-small">27.07.2018 - 11:45</p>
                                        </a>
                                    </div>
                                </div>

                                <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                                    <a href="#">
                                        <img src="img/profiles/l-4.jpg" alt="Esperanza Lodge"
                                            class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
                                    </a>
                                    <div class="pl-3">
                                        <a href="#">
                                            <p class="font-weight-medium mb-0 ">Esperanza Lodge</p>
                                            <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Calendar</h5>
                            <div class="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Best Sellers</h5>
                            <table class="data-table data-table-standard responsive nowrap"
                                data-order="[[ 1, &quot;desc&quot; ]]">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Sales</th>
                                        <th>Stock</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Marble Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1452</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">62</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Fruitcake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1245</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">65</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Chocolate Cake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1200</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">45</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Bebinca</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1150</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">4</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Napoleonshat</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">1050</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">41</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Magdalena</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">998</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">24</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Salzburger Nockerl</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">924</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">20</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Soufflé</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">905</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">64</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cremeschnitte</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">845</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">12</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Cheesecake</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">830</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">36</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Desserts</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Gingerbread</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">807</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">21</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="list-item-heading">Goose Breast</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">795</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">9</p>
                                        </td>
                                        <td>
                                            <p class="text-muted">Cupcakes</p>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>



            <div class="row">
                <div class="col-lg-4 col-sm-12 mb-4">
                    <div class="card dashboard-progress">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button">
                                <i class="simple-icon-refresh"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Profile Status</h5>
                            <div class="mb-4">
                                <p class="mb-2">
                                    <span>Basic Information</span>
                                    <span class="float-right text-muted">12/18</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="66" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Portfolio
                                    <span class="float-right text-muted">1/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="12" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Billing Details
                                    <span class="float-right text-muted">2/6</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Interests
                                    <span class="float-right text-muted">0/8</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <p class="mb-2">Legal Documents
                                    <span class="float-right text-muted">1/2</span>
                                </p>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                        aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-sq-banner justify-content-end">
                        <div class="card-body justify-content-end d-flex flex-column">
                            <span class="badge badge-pill badge-theme-3 align-self-start mb-3">DORE</span>
                            <p class="lead text-white">MAGIC IS IN THE DETAILS</p>
                            <p class="text-white">Yes, it is indeed!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card dashboard-link-list">
                        <div class="card-body">
                            <h5 class="card-title">Cakes</h5>
                            <div class="d-flex flex-row">
                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Marble Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Genoise</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Gingerbread</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Goose Breast</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Parkin</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Petit Gâteau</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Salzburger Nockerl</a>
                                        </li>
                                        <li class="radio_btn_image">
                                            <a href="#">Soufflé</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="w-50">
                                    <ul class="list-unstyled mb-0">
                                        <li class="mb-1">
                                            <a href="#">Streuselkuchen</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Tea Loaf</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Napoleonshat</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Merveilleux</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Magdalena</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cremeschnitte</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Cheesecake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Bebinca</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fruitcake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Chocolate Cake</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Fat Rascal</a>
                                        </li>
                                        <li class="mb-1">
                                            <a href="#">Financier</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



            <div class="row sortable">
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payment Status</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="40"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Work Progress</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="64"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Tasks Completed</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="75"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 mb-4">
                    <div class="card">
                        <div class="card-header p-0 position-relative">
                            <div class="position-absolute handle card-icon">
                                <i class="simple-icon-shuffle"></i>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h6 class="mb-0">Payments Done</h6>
                            <div role="progressbar" class="progress-bar-circle position-relative" data-color="#922c88"
                                data-trailColor="#d7d7d7" aria-valuemax="100" aria-valuenow="32"
                                data-show-percent="true">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Website Visits</h5>
                                    <span class="text-muted text-small d-block">Unique Visitors</span>
                                </div>
                            </div>
                            <div class="btn-group float-right float-none-xs mt-2">
                                <button class="btn btn-outline-primary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="visitChart"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 mb-4">
                    <div class="card dashboard-filled-line-chart">
                        <div class="card-body ">
                            <div class="float-left float-none-xs">
                                <div class="d-inline-block">
                                    <h5 class="d-inline">Conversion Rates</h5>
                                    <span class="text-muted text-small d-block">Per Session</span>
                                </div>
                            </div>
                            <div class="btn-group float-right mt-2 float-none-xs">
                                <button class="btn btn-outline-secondary btn-xs dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    This Week
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Last Week</a>
                                    <a class="dropdown-item" href="#">This Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="chart card-body pt-0">
                            <canvas id="conversionChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-4">
                    <div class="row">
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-file mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">5 Files</p>
                                            <p class="text-small text-white">Pending for print</p>
                                        </div>
                                    </div>

                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="5" aria-valuemax="12" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <div class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-male mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">4 Orders</p>
                                            <p class="text-small text-white">On approval process</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="4" aria-valuemax="6" data-show-percent="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-4">
                            <div class="card mb-4 progress-banner">
                                <a href="#"
                                    class="card-body justify-content-between d-flex flex-row align-items-center">
                                    <div>
                                        <i class="iconsminds-bell mr-2 text-white align-text-bottom d-inline-block"></i>
                                        <div>
                                            <p class="lead text-white">8 Alerts</p>
                                            <p class="text-small text-white">Waiting for notice</p>
                                        </div>
                                    </div>
                                    <div>
                                        <div role="progressbar"
                                            class="progress-bar-circle progress-bar-banner position-relative"
                                            data-color="white" data-trail-color="rgba(255,255,255,0.2)"
                                            aria-valuenow="8" aria-valuemax="10" data-show-percent="false">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 col-lg-6 col-sm-12 mb-4">
                    <div class="card dashboard-search">
                        <div class="card-body">
                            <h5 class="text-white mb-3">Advanced Search</h5>
                            <div class="form-container">
                                <form>
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="form-control select2-single" data-width="100%">
                                            <option label="&nbsp;">&nbsp;</option>
                                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                                <option value="AK">Alaska</option>
                                                <option value="HI">Hawaii</option>
                                            </optgroup>
                                            <optgroup label="Pacific Time Zone">
                                                <option value="CA">California</option>
                                                <option value="NV">Nevada</option>
                                                <option value="OR">Oregon</option>
                                                <option value="WA">Washington</option>
                                            </optgroup>
                                            <optgroup label="Mountain Time Zone">
                                                <option value="AZ">Arizona</option>
                                                <option value="CO">Colorado</option>
                                                <option value="ID">Idaho</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="UT">Utah</option>
                                                <option value="WY">Wyoming</option>
                                            </optgroup>
                                            <optgroup label="Central Time Zone">
                                                <option value="AL">Alabama</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TX">Texas</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="WI">Wisconsin</option>
                                            </optgroup>
                                            <optgroup label="Eastern Time Zone">
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="IN">Indiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="OH">Ohio</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WV">West Virginia</option>
                                            </optgroup>
                                            <option value="TNOGZ" disabled="disabled">The No Optgroup Zone</option>
                                            <option value="TPZ">The Panic Zone</option>
                                            <option value="TTZ">The Twilight Zone</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-5">
                                        <label>Date</label>
                                        <div class="input-group date">
                                            <input type="text" class="form-control">
                                            <span class="input-group-text input-group-append input-group-addon">

                                                <i class="simple-icon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label>Price Range</label>
                                        <div>
                                            <div class="slider" id="dashboardPriceRange"></div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn btn-primary btn-lg mt-3">Search</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mb-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart1"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart2"></canvas>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart3"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="card dashboard-small-chart">
                                <div class="card-body">
                                    <p class="lead color-theme-1 mb-1 value"></p>
                                    <p class="mb-0 label text-small"></p>
                                    <div class="chart">
                                        <canvas id="smallChart4"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card dashboard-top-rated">
                        <div class="position-absolute card-top-buttons">
                            <button class="btn btn-header-light icon-button" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="simple-icon-refresh"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right mt-3">
                                <a class="dropdown-item" href="#">Top Sold Items</a>
                                <a class="dropdown-item" href="#">Top Commented Items</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Top Rated Items</h5>

                            <div class="glide best-rated-items">
                                <div class="glide__track" data-glide-el="track">
                                    <div class="glide__slides">
                                        <div class="glide__slide">
                                            <img src="img/carousels/1.jpg" alt="Cheesecake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">1.</span>Cheesecake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="img/carousels/2.jpg" alt="Chocolate Cake" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">2.</span>Chocolate Cake</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>
                                        <div class="glide__slide">
                                            <img src="img/carousels/3.jpg" alt="Cremeschnitte" class="mb-4">
                                            <h6 class="mb-1"><span class="mr-2">3.</span>Cremeschnitte</h6>
                                            <select class="rating" data-current-rating="5" data-readonly="true">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <p class="text-small text-muted mb-0  d-inline-block">(48)</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </main>
    @include('components.footer')

    <script type="text/javascript">
        
    </script>