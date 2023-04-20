<template>
  <div>
    <Head title="Calendar" />

    <Heading class="mb-6">Calendar</Heading>

    <Card style="margin: 10px; padding: 20px;">
     
    <FullCalendar :options="calendarOptions"/>
    
    </Card>
  </div>
</template>

<script>
import FullCalendar from '@fullcalendar/vue3';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

export default {

  components: {
    FullCalendar
  },
  data() {
    return {
      calendarOptions: {
        plugins: [dayGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        events: []
      }
    }
  },
  beforeMount() {
    let vm = this;
    Nova.request().get('/nova-vendor/calendar/users').then(response=>{
      console.log(response);
      vm.calendarOptions.events = response.data.users.map(event => {
        return {
          title: event.name, 
          date: event.date
        }
      })
    });
  },
}
</script>

<style>
/* Scoped Styles */
</style>
