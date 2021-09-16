<nav class="flex xs:flex-col md:flex-row md:justify-between xs:items-center
 xs:justify-center xs:text-xs md:text-sm font-semibold xs:space-y-5 md:space-y-0 bg-blue-900
  px-8 py-2 text-center border-b-2 border-pink-700">
    <div class="flex space-x-5">
        <a href="{{ route('donation') }}" target="_blank"
           class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Donation</a>
        <a href="#" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">E-Journals</a>
        <a href="#" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Graduations</a>
    </div>
    <div class="flex space-x-5">
        <a href="{{ route('student') }}" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Student</a>
        <a href="{{ route('parent') }}" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Parent</a>
        <a href="{{ route('staff') }}" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Staff</a>
        <a href="{{ route('alumni') }}" class="text-blue-300 hover:text-white tranistion duration-500 ease-in-out">Alumni</a>
    </div>
</nav>
