

<table style="width:25%">
    <tr>
        <th> last_name  </th>
        <th> first_name  </th>
        <th> middle_name  </th>
        <th> suffix  </th>
        <th> nickname  </th>
        <th> full_name  </th>
        <th> birthday  </th>
        <th> gender  </th>
        <th> type  </th>
        <th> state  </th>
        <th> district  </th>
        <th> senate_class  </th>
        <th> party  </th>
        <th> url  </th>
        <th> address  </th>
        <th> phone  </th>
        <th> contact_form  </th>
        <th> rss_url  </th>
        <th> twitter  </th>
        <th> facebook  </th>
        <th> youtube  </th>
        <th> youtube_id  </th>
        <th> bioguide  </th>
        <th> thomas_id  </th>
        <th> opensecrets_id  </th>
        <th> lis_id  </th>
        <th> fec_ids  </th>
        <th> cspan_id  </th>
        <th> govtrack_id  </th>
        <th> votesmart_id  </th>
        <th> ballotpedia_id  </th>
        <th> washington_post_id  </th>
        <th> icpsr_id  </th>
        <th> wikipedia_id  </th>
    </tr>


    @foreach($legislators as $legislator)
        <tr>
            <td>{{ $legislator->last_name }} </td>
            <td>{{ $legislator->first_name }} </td>
            <td>{{ $legislator->middle_name }} </td>
            <td>{{ $legislator->suffix }} </td>
            <td>{{ $legislator->nickname }} </td>
            <td>{{ $legislator->full_name }} </td>
            <td>{{ $legislator->birthday }} </td>
            <td>{{ $legislator->gender }} </td>
            <td>{{ $legislator->type }} </td>
            <td>{{ $legislator->state }} </td>
            <td>{{ $legislator->district }} </td>
            <td>{{ $legislator->senate_class }} </td>
            <td>{{ $legislator->party }} </td>
            <td>{{ $legislator->url }} </td>
            <td>{{ $legislator->address }} </td>
            <td>{{ $legislator->phone }} </td>
            <td>{{ $legislator->contact_form }} </td>
            <td>{{ $legislator->rss_url }} </td>
            <td>{{ $legislator->twitter }} </td>
            <td>{{ $legislator->facebook }} </td>
            <td>{{ $legislator->youtube }} </td>
            <td>{{ $legislator->youtube_id }} </td>
            <td>{{ $legislator->bioguide }} </td>
            <td>{{ $legislator->thomas_id }} </td>
            <td>{{ $legislator->opensecrets_id }} </td>
            <td>{{ $legislator->lis_id }} </td>
            <td>{{ $legislator->fec_ids }} </td>
            <td>{{ $legislator->cspan_id }} </td>
            <td>{{ $legislator->govtrack_id }} </td>
            <td>{{ $legislator->votesmart_id }} </td>
            <td>{{ $legislator->ballotpedia_id }} </td>
            <td>{{ $legislator->washington_post_id }} </td>
            <td>{{ $legislator->icpsr_id }} </td>
            <td>{{ $legislator->wikipedia_id }} </td>
        </tr>
    @endforeach

</table>