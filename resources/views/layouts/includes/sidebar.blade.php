<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="#" class="simple-text">
            Payment SPP
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>

            @if(auth()->user()->role == 'admin')
            <li class=" {{ Request::is('admin/siswa*') ? 'active': '' }} " style="margin-top: 10%;">
                <a href="{{route('siswa.index')}}">
                    <i class="material-icons">account_circle</i>
                    <p>Siswa</p>
                </a>
            </li>
            <li class=" {{ Request::is('admin/category*') ? 'active': '' }}"style="margin-top: 10%;">
                 <a href="{{ route('spp.index') }}">
                    <i class="material-icons">store</i>
                    <p>Spp</p>
                </a>
            </li>

            <li class=" {{ Request::is('admin/kelas*') ? 'active': '' }} "style="margin-top: 10%;">
                <a href="{{ route('kelas.index') }} ">
                    <i class="material-icons">library_books</i>
                    <p>Kelas</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Payment</p>
                </a>
            </li>

            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Message</p>
                </a>
            </li>

            @endif



           {{--  <li class="{{ Request::is('admin/item*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('item.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Items</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/contact*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('contact.index') }}">
                    <i class="material-icons">message</i>
                    <p>Contact Message</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/transaksi*') ? 'active': '' }}"style="margin-top: 10%;">
                <a href="{{ route('transaksi.index') }}">
                    <i class="material-icons">store</i>
                    <p>Transaction</p>
                </a>
            </li> --}}

        </ul>
    </div>
</div>
