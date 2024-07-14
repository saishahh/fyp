@extends('layouts.app')

@section('content')
<!-- Heading -->
<h1 class="display-4 fw-bold text-center"><br><strong>Read Feedback Form</strong><br><br></h1>

<!-- Form -->
<form class="bootstrap-form-with-validation" style="padding: 20px;background: linear-gradient(145deg, #d7d7d7, white);"
action='{{route('showform')}}' method="">

    <!-- Name -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="name">Name</label>
        <input class="form-control" type="text" id="text-input" name="name" placeholder="Please fill in your name" 
        value= "<?php //echo $row['username'] ?>" disabled>
    </div>
    
    <!-- Email -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="email">Email</label>
        <input class="form-control" type="email" id="email-input" name="email" placeholder="Please fill in your email" 
        value="<?php //echo $row['email'] ?>" disabled>
    </div>
    
    <!-- Lab Slot -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="lab_slot">Lab Slots</label>
        <select class="form-select" name="lab_slot" disabled>
                <option value="Slot1" <?php //if ($row['lab_slot'] == 'Slot1') echo "selected"; ?>>Slot 1</option>
                <option value="Slot2" <?php //if ($row['lab_slot'] == 'Slot2') echo "selected"; ?>>Slot 2</option>
                <option value="Slot3" <?php //if ($row['lab_slot'] == 'Slot3') echo "selected"; ?>>Slot 3</option>
        </select></div>

    <!-- Day -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="day">Day</label>
        <input class="form-control" type="date" name="day"  value="<?//php echo $row['lab_day'] ?>" disabled>
    </div>

    <!-- Lab Resource -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="lab_resources">Lab Resources</label>
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1" name="lab_resource1" value="Table" 
        <?php //if ($row['lab_resource1'] == 'Table') echo "checked='checked'"; ?> disabled><label class="form-check-label" for="lab_resource1">Table</label></div>

        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3" name="lab_resource2" value="Chair" 
        <?php //if ($row['lab_resource2'] == 'Chair') echo "checked='checked'"; ?> disabled><label class="form-check-label" for="lab_resource2">Chair</label></div>
        
        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2" name="lab_resource3" value="Computer" 
        <?php //if ($row['lab_resource3'] == 'Computer') echo "checked='checked'"; ?> disabled><label class="form-check-label" for="lab_resource3">Computer</label></div>
    </div>

    <!-- Table -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="table">Lab Performance Evaluation</label>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr style="text-align: center;">
                        <th style="width: 350.781px;text-align: left;">Content</th>
                        <th style="width: 150px;">Strongly Disagree</th>
                        <th style="width: 150px;">Disagree</th>
                        <th style="width: 150px;">Neutral</th>
                        <th style="width: 150px;">Agree</th>
                        <th style="width: 150px;">Strongly Agree</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>The syllabus was explained at the beginning of the course.<br></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q1" value="1" <?php //if ($row['Q1'] == '1') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q1" value="2" <?php //if ($row['Q1'] == '2') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q1" value="3" <?php //if ($row['Q1'] == '3') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q1" value="4" <?php //if ($row['Q1'] == '4') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q1" value="5" <?php //if ($row['Q1'] == '5') echo "checked='checked'"; ?> disabled></td>
                    </tr>
                    <tr>
                        <td>The course was delivered as outlined in the syllabus.<br></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q2" value="1" <?php //if ($row['Q2'] == '1') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q2" value="2" <?php //if ($row['Q2'] == '2') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q2" value="3" <?php //if ($row['Q2'] == '3') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q2" value="4" <?php //if ($row['Q2'] == '4') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q2" value="5" <?php //if ($row['Q2'] == '5') echo "checked='checked'"; ?> disabled></td>
                    </tr>
                    <tr>
                        <td>The instructor was organized and prepared for every class<br></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q3" value="1" <?php //if ($row['Q3'] == '1') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q3" value="2" <?php //if ($row['Q3'] == '2') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q3" value="3" <?php //if ($row['Q3'] == '3') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q3" value="4" <?php //if ($row['Q3'] == '4') echo "checked='checked'"; ?> disabled></td>
                        <td class="text-center" style="vertical-align: middle;"><input type="radio" name="Q3" value="5" <?php //if ($row['Q3'] == '5') echo "checked='checked'"; ?> disabled></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Overall Experience -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="experience">Overall Experience</label>
        <input class="form-range form-control" type="range" name="experience" min="1" max="100" 
        value="<?php //echo $row['experience'] ?>" disabled>
    </div>

    <!-- Comment -->
    <div class="form-group mb-3">
        <label class="form-label fw-semibold" for="comment">Any comments/suggestions/questions?</label>
        <textarea class="form-control" id="textarea-input-2" name="comment" 
        placeholder="Please fill in your comments here" rows="5" disabled><?php //echo $row['comments'] ?></textarea>
    </div>

    <!-- Buttons -->
    <div class="form-group mb-3" style="text-align: center;">
        <button class="btn btn-primary" style="margin: 10px;">Back</button>
    </div>
</form>
@endsection