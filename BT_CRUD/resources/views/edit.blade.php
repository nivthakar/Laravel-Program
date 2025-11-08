<div>
    <!-- We must ship. - Taylor Otwell -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Bootstrap Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
<body>
     <a href="/" class="btn btn-primary">Back</a>
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2>User Information Form</h2>
                <p>Please fill out all the required fields</p>
            </div>
            
            <form id="userForm" novalidate action="{{ url('update/'.$data->id) }}" method="POST">
                @csrf
                <!-- Name Field -->
                <div class="mb-3">
                    <label for="name" class="form-label required">Full Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
                        <div class="invalid-feedback">
                            Please provide your name.
                        </div>
                    </div>
                </div>
                
                <!-- Email Field -->
                <div class="mb-3">
                    <label for="email" class="form-label required">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}" required>
                        <div class="invalid-feedback">
                            Please provide a valid email address.
                        </div>
                    </div>
                </div>
                
                <!-- Gender Field -->
                <div class="mb-3">
                    <label class="form-label required">Gender</label>
                    <div>
                        <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" id="male" value="male" 
    @if($data['gender'] == 'male') checked @endif>
      
                            <label class="form-check-label" for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if($data['gender'] == 'female') checked @endif>
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" @if($data['gender'] == 'other') checked @endif>
                            <label class="form-check-label" for="other">Other</label>
                        </div>
                        <div class="invalid-feedback d-block">
                            Please select your gender.
                        </div>
                    </div>
                </div>
                
                <!-- City Dropdown -->
                <div class="mb-3">
                    <label for="city" class="form-label required">City</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                        <select class="form-select" id="city" name="city" required>
                            <option value="" selected disabled>Select your city</option>
                            <option value="new-york" @if($data['city'] == 'new-york') selected @endif>New York</option>
                            <option value="los-angeles" @if($data['city'] == 'los-angeles') selected @endif>Los Angeles</option>
                            <option value="chicago" @if($data['city'] == 'chicago') selected @endif>Chicago</option>
                            <option value="houston" @if($data['city'] == 'houston') selected @endif>Houston</option>
                            <option value="phoenix" @if($data['city'] == 'phoenix') selected @endif>Phoenix</option>
                            <option value="philadelphia" @if($data['city'] == 'philadelphia') selected @endif>Philadelphia</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select your city.
                        </div>
                    </div>
                </div>
                
                <!-- Hobby Checkboxes -->

                @php
            $selectedHobbies = explode(", ", $data->hobby);
            @endphp
                <div class="mb-3">
                    <label class="form-label required">Hobbies</label>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="reading" {{ in_array('reading', $selectedHobbies) ? 'checked' : '' }}  id="reading">
                                <label class="form-check-label" for="reading">Reading</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="traveling"   {{ in_array('traveling', $selectedHobbies) ? 'checked' : '' }}> 
                                <label class="form-check-label" for="traveling">Traveling</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="sports" {{ in_array('sports', $selectedHobbies) ? 'checked' : '' }}  id="sports">
                                <label class="form-check-label" for="sports">Sports</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="music" {{ in_array('music', $selectedHobbies) ? 'checked' : '' }} id="music">
                                <label class="form-check-label" for="music">Music</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="cooking" {{ in_array('cooking', $selectedHobbies) ? 'checked' : '' }} id="cooking">
                                <label class="form-check-label" for="cooking">Cooking</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="hobby[]" value="gaming" {{ in_array('gaming', $selectedHobbies) ? 'checked' : '' }}  id="gaming">
                                <label class="form-check-label" for="gaming">Gaming</label>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback d-block">
                        Please select at least one hobby.
                    </div>
                </div>
                
                <!-- Address Textarea -->
                <div class="mb-4">
                    <label for="address" class="form-label required">Address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-house-door-fill"></i></span>
                        <textarea class="form-control" name="address" id="address" rows="3" required>{{$data->address}}</textarea>
                        <div class="invalid-feedback">
                            Please provide your address.
                        </div>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-submit">Submit Form</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Form Validation Script -->
    <script>
        // Form validation
        (function () {
            'use strict'
            
            // Fetch the form we want to apply validation to
            var form = document.getElementById('userForm')
            
            // Add validation on form submission
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                
                // Custom validation for hobbies (at least one must be selected)
                const hobbyCheckboxes = document.querySelectorAll('input[type="checkbox"]');
                let atLeastOneChecked = false;
                
                hobbyCheckboxes.forEach(checkbox => {
                    if (checkbox.checked) {
                        atLeastOneChecked = true;
                    }
                });
                
                if (!atLeastOneChecked) {
                    document.querySelector('.invalid-feedback.d-block').style.display = 'block';
                    event.preventDefault();
                    event.stopPropagation();
                } else {
                    document.querySelector('.invalid-feedback.d-block').style.display = 'none';
                }
                
                form.classList.add('was-validated')
            }, false)
        })()
    </script>
</body>
</html>