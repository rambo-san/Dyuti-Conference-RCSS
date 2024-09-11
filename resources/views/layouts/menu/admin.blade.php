    <ul class="sidebar-menu m-t-2" data-widget="tree">

            <li @if($active =='dashboard') class="active " @endif> <a href="{{route('admin.dashboard')}}"> <i class="icon-home"></i> <span>Dashboard</span> <span class="pull-right-container">  </span> </a>
                
            </li>
            <li @if($active =='registration') class="active " @endif> <a href="{{route('registration')}}"> <i class="icon-document"></i> <span>Registrations</span> <span class="pull-right-container">  </span> </a>
                
            </li>
            <li @if($active =='archive-registration') class="active " @endif> <a href="{{route('archived-registration')}}"> <i class="icon-document"></i> <span>Archived Registrations</span> <span class="pull-right-container">  </span> </a>
                
            </li>
            <li @if($active =='contact') class="active " @endif> <a href="{{route('contact.index')}}"> <i class="icon-document"></i> <span>Contact Us</span> <span class="pull-right-container">  </span> </a>
                
                </li>
           
        @role('developer')

            <li class="@if($active == 'role') active @endif"> <a href="{{route('role.index')}}"> <i class="icon-ghost"></i> <span>Roles & Permission</span> <span class="pull-right-container">  </span> </a>
                
            </li>

        @endrole
            

    </ul>