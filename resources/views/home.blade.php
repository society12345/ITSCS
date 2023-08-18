<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
      <!-- Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body class="container">
        <div class="container">
            <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
              <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Laravel CRUD</span>
              </a>
        
              <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact Us</a></li>
              </ul>
            </header>
          </div>
          <div class="container">
            <div class="row">
                 <div class="col-sm-4">
                    <form action="/action_page.php">
                        <div class="mb-3 mt-3">
                          <label class="form-label">LastName:</label>
                          <input type="text" class="form-control" id="lname" placeholder="Enter LastName" name="lname">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Firstname:</label>
                          <input type="text" class="form-control" id="fname" placeholder="Enter FirstName" name="fname">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">MiddleName:</label>
                          <input type="text" class="form-control" id="mname" placeholder="Enter MiddleName" name="mname">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Age:</label>
                          <input type="number" class="form-control" id="mname" placeholder="Enter Age" name="age">
                        </div>
                        <div class="mb-3">
                          <label for="pwd" class="form-label">Gender</label>
                          <select name="gender" id="gen" class="form-control">
                            <option value="0">Select Gender</option>
                          </select>
                        </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <div class="col-sm-8">
                  <h2>Data Table</h2>
                  <p>Data input By User</p>            
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>LastName</th>
                        <th>FirstName</th>
                        <th>MiddleName</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>ecan</td>
                        <td>21</td>
                        <td>Male</td>
                        <td>  
                           <a href="">Edit</a>
                           <label>|</label>
                           <a href="">Delete</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>jurds</td>
                        <td>25</td>
                        <td>Female</td>
                        <td>  
                          <a href="">Edit</a>
                          <label>|</label>
                          <a href="">Delete</a>
                       </td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
          
    </body>
    <footer>
      <div class="container" height="100px" width="100%">
        <br>
        <br>
        <br>
        <br>
      </div>
    </footer>
</html>
