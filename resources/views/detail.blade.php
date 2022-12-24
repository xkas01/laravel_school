@extends('layouts.main')
@section('content')
    <div class="profile">
        <img src="{% static 'images/profile-background-3.PNG' %}" alt="">
        <div class="profile-box">
            {% if student.student_profile_pic %}
            <img src="{{ student.student_profile_pic.url }}">
            {% else %}
            <img src="{% static 'images/login-avatar.PNG' %}" alt="">
            {% endif %}
            <div class="profile-details">
                <h1>{{ student.name }}</h1>
                <br>
                <p><i class="far fa-user"></i> Username: {{ student.user.username }}</p>
                <p><i class="fal fa-user-tag"></i> Roll No.: {{ student.roll_no }}</p>
                <p><i class="far fa-phone"></i> Phone: {{ student.phone }}</p>
                <p><i class="far fa-envelope-open-text"></i> Email ID: {{ student.email }}</p>
                <a href="{% url 'classroom:student_update' pk=user.pk %}"> <p class="edit-button">Edit Profile</p> </a>
            </div>
        </div>
    </div>
@endsection
