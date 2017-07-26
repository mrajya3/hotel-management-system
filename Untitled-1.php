<?php
                  echo "<select name='cmdmonth'>";
		for($i=01;$i<=12;$i++)
			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
                  echo "</select>";
		?>