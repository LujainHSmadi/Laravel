<h2>Student Name: </h2>
<p>{{ $student->name }}</p>

<h3>student Belongs to</h3>

<ul>
    @foreach($student->getSubject as $sub)
    <li>{{ $sub->title }}</li>
    @endforeach
</ul>