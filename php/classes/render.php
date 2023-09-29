<html>


<?php
class Render
{
    public static function displayEmployeeName($employee)
    {
        $output = "";
        $output .= $employee->getFirstName . " " . $employee->getLastName;
        $output .= "\n"; //Line break
        $output .= implode(", ",$employee->getEmail());
        $output .= "\n"; //Line break
        return $output;
    }
}
?>

</html>