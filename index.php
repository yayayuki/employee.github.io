<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Activity 3</title>
</head>
<body>
    <main>
        <div class="col-4 mx-auto">
            <div class="card border-0 mt-5">
                <form action="" method="post">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" id="name" class="form-control mb-3" >

                        <label for="c_status" class="form-label">Civil Status</label>
                        <select name="c_status" id="c_status" class="form-select mb-3">
                            <option value="" hidden>Select Civil Status</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                        </select>

                        <label for="position" class="form-label">Position</label>
                        <select name="position" id="position" class="form-select mb-3">
                            <option value="" hidden>Select Position</option>
                            <option value="admin">Admin</option>
                            <option value="staff">Staff</option>
                        </select>

                        <label for="e_status" class="form-label">Employment Status</label>
                        <select name="e_status" id="e_status" class="form-select mb-3">
                            <option value="" hidden>Select Employment Status</option>
                            <option value="contractual">Contractual</option>
                            <option value="probationary">Probationary</option>
                            <option value="regular">Regular</option>
                        </select>

                        <label for="regular_hrs" class="form-label">Regular Hours Rendered</label>
                        <input type="number" name="regular_hrs" id="regular_hrs" class="form-control mb-3">

                        <label for="overtime_hrs" class="form-label">Over Time Hours</label>
                        <input type="number" name="overtime_hrs" id="overtime_hrs" class="form-control mb-3">

                        <button type="submit" class="btn btn-success float-center w-100">Submit</button>
                </form>

                <?php
                include "Employee.php";

                if(isset($_POST['submit'])){
                    $name = $_POST['name'];
                    $c_status = $_POST['c_status'];
                    $position = $_POST['position'];
                    $e_status = $_POST['e_status'];
                    $regular_hrs = $_POST['regular_hrs'];
                    $overtime_hrs = $_POST['overtime_hrs'];

                    $employee = new Employee($_POST['name'],$_POST['c_status'],$_POST['position'],$_POST['e_status'],$_POST['regular_hrs'],$_POST['overtime_hrs']);
            
                    echo "<hr>";
                    echo "Full Name: " . $employee->getName();
                    echo "Civil Status: " . $employee->getCivilStatus();
                    echo "Positin: " . $employee->getPosition();
                    echo "Employment Status: " . $employee->getEmplStatus();
                    echo "Gross Income: " . $employee->calcGrossINC($position, $e_status, $regular_hrs, $overtime_hrs);
                    echo "Net Income: ";
                }

                ?>

            </div>
        </div>

<!-- 
        <div class="col-6 text-end mx-auto">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Full Name</td>
                        <td><</td>
                    </tr>
                    <tr>
                        <th>Civil Status</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Position</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Employment Status</td>
                        <td></td>
                    </tr>
                    <tr>                    
                        <th>Gross Income</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>Net Income</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div> -->

    </main>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>