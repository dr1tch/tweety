<ul >
    <li >
      <a href="{{route('home')}}" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="h-6 w-8 mr-2" src="/media/web.svg" alt="">
        </span>Home <span class="ml-4 text-green-500 text-xs">active</span>
      </a>
    </li>
    <li>
      <a href="/explore" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="h-6 w-8 mr-2" src="/media/hashtag.svg" alt="">
        </span>Explore <span class="ml-4 text-green-500 text-xs">active</span>
      </a>
    </li>
    <li >
      <a href="/" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
         <img class="h-6 w-8 mr-2" src="/media/bell.svg" alt="">
       </span>Notifications <!-- <span class="ml-1 text-sm rounded-full bg-green-500 p-1">13</span> -->
      </a>
    </li>
    <li>
      <a href="/" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="h-6 w-8 mr-2" src="/media/email.svg" alt="">
        </span>Messages <!-- <span class="ml-1 text-sm rounded-full bg-green-500 p-1">13</span> -->
      </a>
    </li>
    <li>
      <a href="/" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="h-6 w-8 mr-2" src="/media/bookmark.svg" alt="">
        </span>Bookmarks
      </a>
    </li>
    <li>
      <a href="/" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="h-6 w-8 mr-2" src="/media/square.svg" alt="">
        </span>Lists
      </a>
    </li>
    <!-- <li>
      <a href="/" class="font-bold text-lg mb-4 block">
        <span>
          <img class="rounded" src="/media/ideas.svg" alt="">
        </span>Ideas
      </a>
    </li> -->
    <!-- /home/dritch/Downloads/idea (4).svg
/home/dritch/Downloads/lightbulb.svg
/home/dritch/Downloads/cancel.svg -->
    <!-- <li>
      <a href="/" class="font-bold text-lg mb-4 block">
        <span>
          <img class="rounded" src="/media/web.svg" alt="">
        </span>Publications
      </a>
    </li> -->
    <!-- <li>
      <a href="/" class="font-bold text-lg mb-4 block">
        <span>
          <img class="rounded" src="/media/attention.svg" alt="">
        </span>Signalements
      </a>
    </li> -->
    @auth
    <li>
      <a href="{{route('profile', auth()->user())}}" class="font-bold text-lg mb-4 block flex items-center text-sm">
        <span>
          <img class="rounded-full h-10 w-10 mr-2" src="{{auth()->user()->avatar}}" alt="">
        </span>Profile <span class="ml-4 text-green-500 text-xs">active</span>
      </a>
    </li>
    @endauth
    <a href="/" class="font-bold text-lg mb-4 block flex items-center text-sm">
      <span>
        <img class=" h-6 w-8 mr-2" src="/media/more.svg" alt="">
      </span>More
    </a>
  </li>
      <!-- <li >
        <button id="inspire" type="button">Inspirer</button>
   Modal
      </li>
      <li>
        <button type="button">Signaler</button>
 Modal
      </li>

    <li id="trigger-profile" style="margin-top: 15%;">
      <a href="/" class="font-bold text-lg mb-4 block">
        <span>
          <img class="rounded-circle" src="media/a1.jpg" alt="...">
        </span>
        <h5>
          <button>Jessica Smith</button>
          <small> @jess</small>
        </h5>
        <span><i class="fa fa-angle-down"></i></span>
     </a>

    </li> -->
</ul>
