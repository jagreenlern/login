<?php require_once  "head.php";?>
<div class="content-inner form-cont">
            <div class="row">
                <div class="col-md-12">

                    <!--***** BASIC FORM *****-->
                    <div class="card form" id="form1">
                        <div class="card-header">
                            <h3>Basic Form</h3>
                        </div>
                        <br>
                        <form method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>  
                                    <fieldset class="form-group">
                                        <legend>Radio buttons</legend>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked> Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2"> Option two can be something else and selecting it will deselect option one
                                            </label>
                                        </div> 
                                    </fieldset>        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleSelect1">Example select</label>
                                        <select class="form-control" id="exampleSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleTextarea">Example textarea</label>
                                        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                    </div>
                                 </div>
                            </div> 
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button>
                        </form>
                    </div>

                    <!--***** FORM INPUTS *****-->
                    <div class="card form" id="form2">
                        <div class="card-header">
                            <h3>Form Inputs</h3>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-text-input" style="width: 85px;" class=" col-form-label">Text</label>
                                    <div class="col-9">
                                        <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" style="width: 85px;" class=" col-form-label">Search</label>
                                    <div class="col-9">
                                        <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" style="width: 85px;" class=" col-form-label">Email</label>
                                    <div class="col-9">
                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-url-input" style="width: 85px;" class=" col-form-label">URL</label>
                                    <div class="col-9">
                                        <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-tel-input" style="width: 85px;" class=" col-form-label">Telephone</label>
                                    <div class="col-9">
                                        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-password-input" style="width: 85px;" class=" col-form-label">Password</label>
                                    <div class="col-9">
                                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-number-input" style="width: 85px;" class=" col-form-label">Number</label>
                                    <div class="col-9">
                                        <input class="form-control" type="number" value="42" id="example-number-input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="example-datetime-local-input" style="width: 85px;" class=" col-form-label">Date & time</label>
                                    <div class="col-9">
                                        <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-date-input" style="width: 85px;" class=" col-form-label">Date</label>
                                    <div class="col-9">
                                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-month-input" style="width: 85px;" class=" col-form-label">Month</label>
                                    <div class="col-9">
                                        <input class="form-control" type="month" value="2011-08" id="example-month-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-week-input" style="width: 85px;" class=" col-form-label">Week</label>
                                    <div class="col-9">
                                        <input class="form-control" type="week" value="2011-W33" id="example-week-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-time-input" style="width: 85px;" class=" col-form-label">Time</label>
                                    <div class="col-9">
                                        <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-color-input" style="width: 85px;" class=" col-form-label">Color</label>
                                    <div class="col-9">
                                        <input class="form-control" type="color" value="#563d7c" id="example-color-input">
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>

                    <!--***** FORM VALIDATION *****-->
                    <div class="card form" id="form3">
                        <div class="card-header">
                            <h3>Form Validation</h3>
                        </div>
                        <br>
                        <form>
                            <div class="form-group row">
                                <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control is-valid" id="inputHorizontalSuccess" placeholder="name@example.com">
                                    <div class="form-control-feedback">Success! You've done it.</div>
                                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label for="inputHorizontalWarning" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control is-invalid" id="inputHorizontalWarning" placeholder="name@example.com">
                                    <div class="invalid-feedback">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div> 
                        </form> 
                        <hr> 
                        <div class="mt-2 mb-4">
                            <h4 style="border-bottom:1px solid #ddd; padding-bottom: 10px;">With Label</h4>
                        </div>
                        <div class="form-group has-success">
                            <label class="form-control-label" for="inputSuccess1">Input with success</label>
                            <input type="text" class="form-control is-valid" id="inputSuccess1">
                            <div class="form-control-feedback">Success! You've done it.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                        </div>
                        <div class="form-group has-warning">
                            <label class="form-control-label" for="inputWarning1">Input with warning</label>
                            <input type="text" class="form-control is-invalid" id="inputWarning1">
                            <div class="invalid-feedback">Shucks, check the formatting of that and try again.</div>
                            <small class="form-text text-muted">Example help text that remains unchanged.</small>
                        </div> 
                    </div>

                    <!--***** FILE UPLOAD *****-->
                    <div class="card form" id="form4">
                        <div class="card-header">
                            <h3>File Upload</h3>
                        </div>
                        <br>
                        <div class="panel panel-default">
                            <div class="panel-heading"><strong>Upload files</strong> <small> </small></div>
                            <div class="panel-body">
                                <div class="input-group image-preview">
                                    <input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
                                    <span class="input-group-btn"> 
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
                                    <div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                    </div> 
                                    </span>
                                </div>
                                <br />
                                <div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
                                <br />
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"> <span class="sr-only">60% Complete</span> </div>
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>

                    <!--***** FORM GROUP *****-->
                    <div class="card form" id="form5">
                        <div class="card-header">
                            <h3>Form With Icon</h3>
                        </div>
                        <br>
                        <form>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Example label</label>
                                <div class="input-group ">
                                    <div class="input-group-addon"><i class="fa fa-user-o"></i></div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Password</label>
                                <div class="input-group ">
                                    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
                                    <input type="password" class="form-control" value="hunter2" id="inlineFormInputGroup" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="icon-number">Number</label>
                                <div class="input-group ">
                                    <div class="input-group-addon"><i class="fa fa-phone"></i></div>
                                    <input type="text" class="form-control" id="icon-number" placeholder="Enter Number" >
                                </div>
                            </div>
                        </form>
                    </div>

                    <!--***** INLINE FORM *****-->
                    <div class="card form" id="form6">
                        <div class="card-header">
                            <h3>Inline Form</h3>
                        </div>
                        <br>
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="inlineFormInput" placeholder="Jane Doe">
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                <div class="input-group-addon">@</div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
                            </div>
                            <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button>
                        </form>
                        <form class="form-inline mt-5">
                            <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input type="checkbox" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Remember my preference</span>
                            </label>
                            <button type="submit" class="btn btn-general btn-blue mr-2">Submit</button>  
                            <button type="reset" class="btn btn-general btn-white">Cancel</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--Global Javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/chart.min.js"></script> 
    <script src="js/front.js"></script> 
    

</body>

</html>