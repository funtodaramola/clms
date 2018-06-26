<hr>
<label for="fname"><b>First Name</b></label>
<input type="text" placeholder="First Name..." name="fname" class="input-field" required>

<label for="lname"><b>Last Name</b></label>
<input type="text" placeholder="Last name..." name="lname" class="input-field" required>

<label for="college"><b>College</b></label>
<select name="college">
    <option value="copas">College of Pure and Applied Science</option>
    <option value="cosomas">College of Social and Management Science</option>
    <option value="colensma">College of Environment Science and Management</option>
</select>

<!-- link department to college later -->
<label for="dept"><b>Department</b></label>
<select name="dept">
    <!-- cosomas -->
    <span id="cosomas">
    <option value="ACC">Accounting</option>
    <option value="BUS">Business Administration</option>
    <option value="ECO">Economics</option>
    <option value="MAS">Mass Communication</option>
    <option value="POS">Political Science</option>
    <option value="IRS">International Relations</option>
    <option value="CRM">Criminology, Peace and Conflict Resolution</option>
    </span>
    <!-- copas -->
    <span id="copas">
    <option value="MCB">MicroBiology</option>
    <option value="BCH">BioChemistry</option>
    <option value="ICH">Industrial Chemistry</option>
    <option value="CSC">Computer Science</option>
    <option value="PHY">Physics</option>
    </span>
    <!-- colensma -->
    <span id="copas">
    <option value="ARC">Architecture</option>
    <option value="BUD">Building</option>
    <option value="SUY">Quantity Surveying</option>
    </span>
</select>
<!-- <input type="text" placeholder="Department..." name="dept" class="input-field" required> -->
<label for="level"><b>Level</b></label>
<input type="number" name="level" class="input-field" step="100" min="100" max="400" list="defaultNumbers" required>
<datalist id="defaultNumbers">
<option value="100">
<option value="200">
<option value="300">
<option value="400">
</datalist>
