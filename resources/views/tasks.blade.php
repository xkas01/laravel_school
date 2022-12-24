@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="jumbotron">
            {% if given_marks.count == 0 %}
            <h2>You have not given any marks to {{ student.name }}.</h2>
            {% else %}
            <h3>Marks profile of {{ student.name }}</h3>

            <table class='table'>
                <thead class="thead-dark">
                <tr>
                    <th scope="col">Sr. no.</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Marks Obtained</th>
                    <th scope="col">Max. Marks</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                {% for marks in given_marks %}
                <tr>
                    <th scope="row">{{ forloop.counter }}</th>
                    <th>{{ marks.subject_name }}</th>
                    <th>{{ marks.marks_obtained }}</th>
                    <th>{{ marks.maximum_marks }}</th>
                    <th><a class="btn btn-primary" href="{% url 'classroom:update_marks' pk=marks.pk %}">Update</a></th>
                </tr>
                {% endfor %}
                </tbody>
            </table>
            <br>

            {% endif %}
            <p><a class="btn btn-danger" href="{% url 'classroom:enter_marks' pk=student.pk %}">Add marks</a></p>

        </div>
    </div>
@endsection
