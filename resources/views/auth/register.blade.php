@extends("layouts.app")

@section("title", "Register Page")

@section("content")

<section class="register-container">
  <h2>REGISTER</h2>

  <div class="form-group">
    <label>Select Program</label>

    <div class="program">
      <div class="dropdown-container">
        <button class="dropdown-button">
          <span>Select Program</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 9l6 6 6-6"></path>
          </svg>
        </button>
        <div class="dropdown-list">
          <div data-value="program">program</div>
          <div data-value="program1">program1</div>
          <div data-value="program2">program2</div>
        </div>
      </div>

      <div class="dropdown-container">
        <button class="dropdown-button">
          <span>Select Program</span>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 9l6 6 6-6"></path>
          </svg>
        </button>
        <div class="dropdown-list">
          <div data-value="program">program</div>
          <div data-value="program1">program1</div>
          <div data-value="program2">program2</div>
        </div>
      </div>
    </div>
  </div>

    <form class="form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
      @csrf
    <div class="form-group">
      <label>Your name</label>
      <input type="text" name="name" placeholder="Enter your name">
      @error("name")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your email">
          @error("email")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" placeholder="Enter your Password">
          @error("password")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Phone Number</label>
      <input type="tel" name="phone" placeholder="Enter your phone number">
          @error("phone")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Date of Birth</label>
      <input type="date" name="date_of_birth">
      @error("date_of_birth")
          <div class="error">{{ $message }}</div>
      @enderror
  </div>
  
  
    <div class="form-group">
      <label>Country</label>
      <input type="text" name="country" placeholder="Where you from?">
          @error("country")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Address</label>
      <input type="text" name="address" placeholder="Enter address">
          @error("address")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Province</label>
      <input type="text" name="province" placeholder="Enter province">
          @error("province")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Regency</label>
      <input type="text" name="regency" placeholder="Enter regency">
          @error("regency")
        <div class="error">{{ $message }}</div>
      @enderror
    </div>
  
    <div class="form-group">
      <label>Your Profile Picture</label>
      <div class="file-upload" id="file-upload">
        <p>Drag file here or click the button below</p>
        <input type="file" name="photo" id="file" accept="image/*">
        <label for="file" class="upload-btn">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 5v14m-7-7h14" />
          </svg>
        </label>
        <div id="preview-container"></div>
        <p id="error-message" style="color: red; display: none;">Please input 3:4 photo</p>
      </div>
  
    </div>
  
      <div class="form-group">
        <label>Message</label>
        <textarea placeholder="Send a message"></textarea>
      </div>

    <button type="submit" class="send-button">Send</button>
    </form>
  </section>
@endsection