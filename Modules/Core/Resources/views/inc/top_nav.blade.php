<nav class="flex xs:flex-col md:flex-row md:justify-between xs:items-center
 xs:justify-center xs:text-xs md:text-sm font-semibold xs:space-y-5 md:space-y-0 bg-purple-800
  px-12 py-5 text-center border-b-4 border-red-600">
    <div class="flex space-x-5">
        <a href="#" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Donation</a>
        <a href="#" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">E-Journals</a>
        <a href="#" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Graduations</a>
    </div>
    <div class="flex space-x-5">
        <a href="{{ route('student') }}" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Student</a>
        <a href="{{ route('parent') }}" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Parent</a>
        <a href="{{ route('staff') }}" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Staff</a>
        <a href="{{ route('alumni') }}" class="text-blue-100 hover:text-red-600 tranistion duration-500 ease-in-out">Alumni</a>
    </div>
</nav>
