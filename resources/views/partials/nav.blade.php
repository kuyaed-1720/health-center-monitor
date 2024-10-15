<nav class="sidebar border border-secondary px-2 py-2">
	<form>
		<input class="form-control me-sm-2" name="search" id="search" type="search" placeholder="Search">
	</form>
	<ul class="nav d-flex flex-column">
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" id="test" href="#"><i class="bi bi-house-door"></i> Dashboard</a>
		</li>
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" href="#"><i class="bi bi-people"></i> Residents</a>
		</li>
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" href="#"><i class="bi bi-megaphone"></i> Announcement</a>
		</li>
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" href="#"><i class="bi bi-calendar-heart"></i> Programs</a>
		</li>
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" href="#"><i class="bi bi-cloud-arrow-up"></i> Backup and Security</a>
		</li>
		<li class="nav-item border-bottom border-secondary">
			<a class="nav-link text-success" href="{{ route('calendar') }}"><i class="bi bi-calendar"></i> Calendar</a>
		</li>
	</ul>
</nav>