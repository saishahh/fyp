@extends('layouts.app')

@section('content')
<section class="welcome-section">
    <div class="welcome-content">
      <div class="welcome-messages">
        <h1>Welcome aboard!</h1>
        <h3>We're here to help you navigate the world of internships.</h3>
        <h5>Start your journey today and discover the possibilities waiting for you.</h5>
        <a href="{{ route('showread') }}" class="btn btn-primary">Discover Internships Near You</a>
      </div>
    </div>
  </section>

  <!-- Three Column Grid Section -->
  <section class="three-column-grid">
    <div class="column search-column">
      <h2>Search</h2>
      <p>Easily find internships that match your preferences by filtering opportunities by industry, location, and company. </p>
      <a href="{{ route('showread') }}" class="btn btn-secondary">Search</a>
    </div>
    <div class="column read-column">
      <h2>Read</h2>
      <p>Read honest reviews from past interns to gain insights into various internship experiences,and learning opportunities. Make informed decisions about your internship choices.</p>
      <a href="{{ route('showread') }}" class="btn btn-secondary">Read</a>
    </div>
    <div class="column share-column">
      <h2>Share</h2>
      <p>Share your internship journey to help future interns. Provide valuable feedback, highlight your experiences, and contribute to a supportive community of interns.</p>
      <a href="{{ route('form') }}" class="btn btn-secondary">Share</a>
    </div>
  </section>

  <style scoped>
    body {

      background-color: #ddc2a3; /*Brown background color*/
      color: #333; /* Text color for the entire page */
    }
    
    .welcome-section {
        background: url('../public/storage/bg.jpg') no-repeat center;

      position: relative;
      height: 60vh;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center; /* Center content horizontally */
      color: white;
      padding: 0 20px; /* Add padding to the sides */
    }
    
    .welcome-content {
      display: flex;
      flex-direction: column;
      align-items: center; /* Center align items vertically */
      text-align: center; /* Center align text */
      width: 100%;
      max-width: 1200px; /* Limit content width */
      margin: 0 auto; /* Center content horizontally */
    }
    
    .welcome-messages {
      padding: 20px;
      background: rgba(0, 0, 0, 0.5); /* Transparent black background */
      border-radius: 10px; /* Rounded corners */
    }
    
    .three-column-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* Three equal columns */
      gap: 20px; /* Gap between columns */
      margin-top: 20px;
      margin-left: 50px;
      margin-right: 50px; /* Adjust top margin as needed */
    }
    
    .column {
      background-color: #fff; /* Background color for columns */
      padding: 20px;
      border-radius: 10px;
      text-align: justify;
      border: 1px solid #ccc; /* Border styling */
    }
    
    .column h2 {
      font-size: 2rem;
      margin-bottom: 10px;
    }
    
    .column p {
      font-size: 1rem;
      color: #666;
    }
    
    .column .btn {
      margin-top: 10px; /* Adjust button margin */
    }
  </style>
@endsection
