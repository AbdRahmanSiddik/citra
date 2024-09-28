import cv2
import matplotlib.pyplot as plt
import numpy as np
import sys

def show_histogram(image_path):
    # Baca citra
    image = cv2.imread(image_path)
    if image is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Konversi citra dari BGR (OpenCV default) ke RGB
    image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

    # Pisahkan channel warna
    channels = ('r', 'g', 'b')
    colors = ('red', 'green', 'blue')

    plt.figure(figsize=(10, 5))

    for i, color in enumerate(colors):
        plt.subplot(1, 3, i+1)  # Membuat subplot untuk setiap channel
        histogram = cv2.calcHist([image_rgb], [i], None, [256], [0, 256])
        plt.plot(histogram, color=color)
        plt.xlim([0, 256])
        plt.title(f'{channels[i].upper()} Histogram')
        plt.xlabel('Pixel Value')
        plt.ylabel('Frequency')

        # Menghitung nilai statistik untuk channel ini
        channel_data = image_rgb[:, :, i].flatten()
        mean = np.mean(channel_data)
        variance = np.var(channel_data)
        std_dev = np.std(channel_data)

        # Menampilkan nilai statistik pada subplot
        stats_text = f'Mean: {mean:.2f}\nVariance: {variance:.2f}\nStd Dev: {std_dev:.2f}'
        plt.text(0.65, 0.85, stats_text, transform=plt.gca().transAxes, fontsize=10, color=color)

    # Tampilkan histogram
    plt.tight_layout()
    plt.show()

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python histogram.py <image_path>")
    else:
        image_path = sys.argv[1]
        show_histogram(image_path)
