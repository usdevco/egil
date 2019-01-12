<table class="table table-striped table-hover " id="s">
                    <thead>
                        <tr>
                            <th>Sr</th>
                            <th>Date/Title</th>
                            <th>Responses</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trips as $trip)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>
                                    <p>
                                        {{ date('d-M-Y',strtotime($trip->check_in)) }}
                                    </p>
                                    {{ $trip->trip_name }}
                                </td>
                                <td>{{ count($trip->rfps) }}</td>
                                <td>
                                    @php
                                        $rfpUserIds = [];
                                        foreach ($trip->rfps as $rfp){
                                            $rfpUserIds[count($rfpUserIds)] = $rfp->user_id;
                                        }
                                    @endphp
                                    @if (in_array(Session::get('uid'), $rfpUserIds))
                                        Bid Sent Out
                                    @else
                                        No Bid Sent
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                          <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown"> Action </button>
                                          <ul class="dropdown-menu">
                                            <li><a href="{{ route('hotelmanager.trips.show',$trip->id) }}" class="tips" title="View Trips">View Details</a></li>
                                          </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>