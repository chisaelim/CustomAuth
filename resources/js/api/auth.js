export async function logUserIn(loginObj) {
    try {
        return await axios.post('/api/public/auth/login', loginObj);
    } catch (error) {
        throw error;
    }
}
export async function logUserOut() {
    try {
        return await axios.post('/api/public/auth/logout');
    } catch (error) {
        throw error;
    }
}
export async function verifyUser() {
    try {
        return await axios.post('/api/public/auth/verify');
    } catch (error) {
        throw error;
    }
}
