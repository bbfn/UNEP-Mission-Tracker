<template>
  <div class="unep-form">
    <h2>Mission Reporting Portal</h2>
    <form @submit.prevent="submitMission">
      <input v-model="form.name" placeholder="Staff Name" required />
      <select v-model="form.focus">
        <option value="Climate">Climate Change</option>
        <option value="Pollution">Pollution</option>
        <option value="Biodiversity">Biodiversity</option>
      </select>
      <textarea v-model="form.findings" placeholder="Enter findings..."></textarea>
      <button type="submit">Submit Report</button>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return { form: { name: '', focus: 'Climate', findings: '', region: 'Global' } }
  },
  methods: {
    async submitMission() {
      const res = await fetch('../backend/submit.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(this.form)
      });
      const result = await res.json();
      alert(result.message);
    }
  }
}
</script>