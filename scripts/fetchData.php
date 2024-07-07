<?php
header('Content-Type: application/javascript');
?>
export const fetchData = async (url) => {
    try {
        const response = await fetch(url);
        if (!response.ok) {
            if (response.status === 404) {
                throw new Error('Data not found');
            } else if (response.status === 500) {
                throw new Error('Server Error');
            } else {
                throw new Error('Network Request was not OK');
            }
        }
        return await response.json();
    } catch (error) {
        console.error('Error:', error.message);
        throw error;
    }
};