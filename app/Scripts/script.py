import cv2
import matplotlib.pyplot as plt
import sys
import os

output_dir = 'images/'
os.makedirs(output_dir, exist_ok=True)

def save_histogram(image_path):
    # Baca citra
    image = cv2.imread(image_path)
    if image is None:
        print(f"Error: Could not open or find the image '{image_path}'")
        return

    # Konversi citra dari BGR (OpenCV default) ke RGB
    image_rgb = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)

    # Hitung histogram untuk setiap channel warna
    plt.figure(figsize=(8, 6))
    colors = ('red', 'green', 'blue')
    for i, color in enumerate(colors):
        histogram = cv2.calcHist([image_rgb], [i], None, [256], [0, 256])
        plt.plot(histogram, color=color)
        plt.xlim([0, 256])

    # Simpan histogram sebagai gambar di direktori 'public/images/'
    output_path = os.path.join(output_dir, 'histogram.png')
    plt.savefig(output_path)
    plt.close()

    return output_path

if __name__ == "__main__":
    if len(sys.argv) != 2:
        print("Usage: python histogram.py <image_path>")
    else:
        image_path = sys.argv[1]
        save_histogram(image_path)
