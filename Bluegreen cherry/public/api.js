//backend commmunication
Cherry = {
    BASE_URL: 'http://localhost:3000/api',
    getHeaders(isFormData = false) {
        const token = localStorage.getItem('fida_token');
        const headers = { 'Authorization': `Bearer ${token}` };
        if (!isFormData) {
            headers['Content-Type'] = 'application/json';
        }
        return headers;
    },

    auth: {
        async googleLogin(googleToken) {
            const res = await fetch(`${Cherry.BASE_URL}/auth/google`, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ token: googleToken })
            });
            return await res.json();
        },

        async getMe() {
            const token = localStorage.getItem('fida_token');
            if (!token) throw new Error('No token found');

            const res = await fetch(`${Cherry.BASE_URL}/auth/me`, {
                headers: { 'Authorization': `Bearer ${token}` }
            });

            if (!res.ok) throw new Error('Session invalid');
            return await res.json();
        }
    },

    events: {
        async getAll() {
            const res = await fetch(`${Cherry.BASE_URL}/events`);
            return await res.json();
        },

        async create(formData) {
            // Note: Do not set Content-Type for FormData; browser sets boundary automatically
            const res = await fetch(`${Cherry.BASE_URL}/events`, {
                method: 'POST',
                headers: { 'Authorization': `Bearer ${localStorage.getItem('fida_token')}` },
                body: formData
            });
            return await res.json();
        },

        async join(eventId) {
            const res = await fetch(`${Cherry.BASE_URL}/events/join`, {
                method: 'POST',
                headers: Cherry.getHeaders(),
                body: JSON.stringify({ eventId })
            });
            return await res.json();
        }
    },

    profile: {//IIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
        async loadDetails(){
            return {phone: 's', city: 'pune'}
        }
    }
};

