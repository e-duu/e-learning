@extends('layouts.app')
@section('title')
  Insight Chapter Details
@endsection
@section('content')
  <div class="container mx-auto px-5">
    <h1 class="text-black text-2xl font-bold my-12">Class / <span class="text-gray-400 font-normal">Chapter Details</span></h1>
    <div class="grid grid-cols-6 items-start gap-7 mb-20">
      <div class="col-span-4">
        <iframe class="rounded-lg shadow-lg border w-full border-gray-300" height="500px" src="https://www.youtube.com/embed/Jz2nAmRXMS8" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="col-span-2">
        <div class="flex-col border-2 border-gray-300 shadow-lg p-5 overflow-auto" style="height: 447px; border-radius: 7px 7px 0px 0px;">
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
          <div class="border-b-2 border-gray-300 my-5"></div>
          <a href="#" class="flex items-center space-x-5 hover:bg-pink-100 transition-all px-2 py-4 rounded-md">
            <img src="{{ asset('/images/banner-2.svg') }}" class="rounded-sm w-24">
            <p class="text-black text-md">
              Lorem Ipsum dolor sit amet sit amet sit amet sit amet
            </p>
          </a>
        </div>
        <button class="bg-pink-700 p-5 w-full text-white" style="border-radius: 0px 0px 7px 7px; margin-top: -10px;">Next</button>
      </div>
    </div>
    <div class="mt-10 flex-col mb-20">
      <h1 class="text-pink-700 font-bold text-3xl w-3/5 leading-relaxed">Chapter 2 : <span class="text-black font-semibold">5 Menit menjadi Fullstack DeveloperMenit menjadi Fullstack DeveloperMenit menjadi Fullstack Developer</span></h1>
    </div>
  </div>
</div>
@endsection