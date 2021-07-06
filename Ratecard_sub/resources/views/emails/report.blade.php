@component('mail::message')
# Your report

### Total messages:<br>
{{$report['statistics']['messages']['total']}}<br>
### Total feedback:<br>
{{$report['statistics']['messages']['feedback_with_messages']}}<br>
### Response rate:<br>
{{round($report['statistics']['messages']['conversion'],1)}}<br>
### Average CSAT:<br>
{{round($report['statistics']['csat']['avg'],2)}}<br>
### Average NPS:<br>
{{round($report['statistics']['nps']['avg'],1)}}<br>
### Sentiment:<br>
{{__("lang.{$report['statistics']['sentiment']['value']}")}}<br>
### Engagement:<br>
{{__("lang.{$report['statistics']['engagement']['value']}")}}<br>

Thanks,<br>
Ratecard.
@endcomponent
