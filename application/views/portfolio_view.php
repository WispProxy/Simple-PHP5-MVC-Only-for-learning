<?php
/**
 * Created by PhpStorm.
 * User: WispProxy
 * Date: 09.12.2014
 * Time: 14:48
 */
?>
<h1>Portfolio</h1>

<table class="table table-responsive">
    This example projects!
    <thead>
        <tr>
            <th>
                <h5>
                    Year
                </h5>
            </th>
            <th>
                <h5>
                    Site
                </h5>
            </th>
            <th>
                <h5>
                    Description
                </h5>
            </th>
        </tr>
    </thead>
    <?php
        foreach($data as $row)
        {
            echo    '<tbody>'.
                        '<tr>'.
                            '<td>'.$row['Year'].'</td>'.
                            '<td>'.$row['Site'].'</td>'.
                            '<td>'.$row['Description'].'</td>'.
                        '</tr>'.
                    '</tbody>';
        }
    ?>
</table>
