<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Contact Form</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
      crossorigin="anonymous"
    ></script>

    <div class="container py-4">
      <h3 class="mb-4">Contact Information</h3>

      <form novalidate>
        <div class="row g-3">
          <div class="col-md-6">
            <label for="firstName" class="form-label"><strong>First name</strong></label>
            <input
              type="text"
              class="form-control"
              id="firstName"
              name="firstName"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="lastName" class="form-label"><strong>Last name</strong></label>
            <input
              type="text"
              class="form-control"
              id="lastName"
              name="lastName"
              required
            />
          </div>

          <div class="col-12">
            <label for="address" class="form-label"><strong>Address</strong></label>
            <input
              type="text"
              class="form-control"
              id="address"
              name="address"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="city" class="form-label"><strong>City</strong></label>
            <input
              type="text"
              class="form-control"
              id="city"
              name="city"
              required
            />
          </div>

          <div class="col-md-3">
            <label for="state" class="form-label"><strong>State</strong></label>
            <select class="form-select" id="state" name="state" required>
              <option value="">Choose...</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI" selected>Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label"><strong>Zip</strong></label>
            <input
              type="text"
              class="form-control"
              id="zip"
              name="zip"
              pattern="^\d{5}(-\d{4})?$"
              title="Enter a 5-digit ZIP or ZIP+4"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label"><strong>Phone</strong></label>
            <input
              type="tel"
              class="form-control"
              id="phone"
              name="phone"
              pattern="^\+?[\d\s\-\(\)]{7,20}$"
              title="Enter a valid phone number"
              required
            />
          </div>

          <div class="col-md-6">
            <label for="email" class="form-label"><strong>Email address</strong></label>
            <input
              type="email"
              class="form-control"
              id="email"
              name="email"
              aria-describedby="emailHelp"
              required
            />
          </div>

          <div class="col-12">
            <label class="form-label d-block"><strong>Preferred method of contact</strong></label>

            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="contactEmail"
                name="preferredContact"
                value="email"
              />
              <label class="form-check-label" for="contactEmail">Email</label>
            </div>

            <div class="form-check form-check-inline">
              <input
                class="form-check-input"
                type="checkbox"
                id="contactText"
                name="preferredContact"
                value="text"
              />
              <label class="form-check-label" for="contactText">Text</label>
            </div>

            <div class="form-text mt-2">Select one or both options.</div>
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-outline-secondary ms-2">Reset</button>
        </div>
      </form>
    </div>
  </body>
</html>
